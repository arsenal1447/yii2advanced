<?php
namespace common\models;

use Yii;
use base\BaseActiveRecord;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "reply".
 *
 * @property integer $reply_id
 * @property integer $reply_post
 * @property integer $reply_user
 * @property string $reply_user_name
 * @property string $reply_title
 * @property string $reply_content
 * @property string $reply_create
 * @property string $reply_update
 * @property integer $reply_support
 * @property integer $reply_against
 * @property integer $reply_floor
 * @property string $reply_note
 */
class Reply extends ActiveRecord implements IdentityInterface
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_reply}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                [['reply_post','reply_user','reply_user_name','reply_content','reply_create'],'required'],
                [['reply_post','reply_user','reply_support','reply_against','reply_floor'],'integer'],
                [['reply_content'],'string'],
                [['reply_create','reply_update'],'safe'],
                [['reply_user_name'],'string','max' => 32],
                [['reply_title'],'string','max' => 128],
                [['reply_note'],'string','max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
                'reply_id' => 'ID',
                'reply_post' => 'Post ID',
                'reply_user' => 'User ID',
                'reply_user_name' => 'User Name',
                'reply_title' => '标题',
                'reply_content' => '内容',
                'reply_create' => 'Create Time',
                'reply_update' => 'Edit Time',
                'reply_support' => '支持数',
                'reply_against' => '反对数',
                'reply_floor' => '楼层',
                'reply_note' => 'Note'
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'admin_status' => self::STATUS_ACTIVE]);
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
        return static::findOne(['admin_name' => $username, 'admin_status' => self::STATUS_ACTIVE]);
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
                'admin_password_reset_token' => $token,
                'admin_status' => self::STATUS_ACTIVE,
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
        return $this->admin_authkey;
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
        return Yii::$app->security->validatePassword($password, $this->admin_passhash);
    }




}
