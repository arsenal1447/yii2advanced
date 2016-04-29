<?php
namespace common\models;

use Yii;
use common\helpers\Avatar;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yiier\merit\models\Merit;

/**
 * User model
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ROLE_USER = 10;
    const ROLE_ADMIN = 20;
    const ROLE_SUPER_ADMIN = 30;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'user_create',
            'updatedAtAttribute' => 'user_logintime',
//             'value' => new Expression('NOW()'),//如果是timestamp类型 ,需要这样操作
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['user_status', 'default', 'value' => self::STATUS_ACTIVE],
            ['user_status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['user_id' => $id, 'user_status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    { 
        return static::findOne(['user_name' => $username, 'user_status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'user_password_reset_token' => $token,
            'user_status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->user_authkey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->user_passhash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->user_passhash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->user_authkey = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->user_password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->user_password_reset_token = null;
    }
    
    /**
     * @desc 转化时间格式
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public static function convertDate($datetime){
        return date('Y-m-d H:i:s',$datetime);
    }
    
    
    /**
     * @desc 根据用户id获取发帖者姓名
     * @param $userid 发帖作者的用户id
     * @return string 发帖者的用户名
     */
    public static function getAuthName($userid){
        $userinfo = User::find()->where(['user_id' => $userid])->asArray()->one();
         
        if($userinfo){
            return $userinfo['user_name'];
        }else{
            return '';
        }
    }
    
    /**
     * @desc 转化删除状态
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public static function getDelstatus($deld){
        if($deld=='0'){
            return '正常';
        }else{
            return '已删除';
        }
    }
    
    public function getUserInfo()
    {
        return $this->hasOne(UserInfo::className(), ['info_user_id' => 'user_id']);
    }
    
    public function getMerit()
    {
        return $this->hasOne(Merit::className(), ['user_id' => 'user_id']);
    }
    
    public static function isAdmin($username)
    {
        if (static::findOne(['user_name' => $username, 'user_role' => self::ROLE_ADMIN])) {
            return true;
        } else {
            return false;
        }
    }
    
    public static function isSuperAdmin($username)
    {
        if (static::findOne(['user_name' => $username, 'user_role' => self::ROLE_SUPER_ADMIN])) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * 获取用户头像
     * @param int $size
     * @return string
     * @throws \yii\base\Exception
     */
    public function getUserAvatar($size = 50)
    {
        if ($this->user_avatar) {
            // TODO 写法更优雅
            $avatarPath = Yii::$app->basePath . Yii::$app->params['avatarPath'];
            $avatarCachePath = Yii::$app->basePath . Yii::$app->params['avatarCachePath'];
            FileHelper::createDirectory($avatarCachePath); // 创建文件夹
            if (file_exists($avatarCachePath . $size . '_' . $this->user_avatar)) {
                // 缓存头像是否存在
                return Yii::$app->params['avatarCacheUrl'] . $size . '_' . $this->user_avatar;
            }
            if (file_exists($avatarPath . $this->user_avatar)) {
                // 原始头像是否存在
                \yii\imagine\Image::thumbnail($avatarPath . $this->user_avatar, $size, $size)
                ->save($avatarCachePath . $size . '_' . $this->user_avatar, ['quality' => 100]);
                return Yii::$app->params['avatarCacheUrl'] . $size . '_' . $this->user_avatar;
            }
        }
        return (new Avatar($this->user_email, $size))->getAvater();
    }
    
    public static function getRoles($role)
    {
        $data = [
                self::ROLE_ADMIN => [
                        'name' => '高级会员',
                        'color' => 'primary',
                ],
                self::ROLE_USER => [
                        'name' => '会员',
                        'color' => 'info',
                ],
                self::ROLE_SUPER_ADMIN => [
                        'name' => '管理员',
                        'color' => 'success',
                ]
        ];
        return $data[$role];
    }
    
    /**
     * 获取权限
     * @param $username
     * @return bool
     */
    public static function getThrones($username = '')
    {
        if (!$username && Yii::$app->user->id) {
            $username = Yii::$app->user->identity->user_name;
        } else {
            return false;
        }
        if ($isAdmin = self::isAdmin($username)) {
            return $isAdmin;
        }
        return self::isSuperAdmin($username);
    }
    
    
    
}
