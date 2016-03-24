<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%ad_admin}}".
 *
 * @property string $id
 * @property string $admin_name
 * @property string $admin_passhash
 * @property string $admin_email
 * @property integer $admin_create
 * @property integer $admin_logintime
 * @property string $admin_ip
 * @property string $admin_nickname
 * @property integer $admin_status
 * @property integer $admin_deld
 * @property string $admin_authkey
 * @property string $admin_password_reset_token
 */
class AdAdmin extends \yii\db\ActiveRecord
{
    public $new_password;
    
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_admin}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_name', 'new_password', 'admin_email','admin_role'], 'required'],
            [['admin_create', 'admin_logintime', 'admin_status', 'admin_deld','admin_role'], 'integer'],
            [['admin_name', 'admin_passhash', 'admin_nickname', 'admin_authkey', 'admin_password_reset_token'], 'string', 'max' => 100],
            [['admin_email', 'admin_ip'], 'string', 'max' => 50],
            [['admin_role', 'admin_role'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admin_name' => 'Name',
            'admin_passhash' => 'Password',
            'admin_role' => 'Role',
            'admin_email' => 'Email',
            'admin_create' => Yii::t('app', 'Created At'),
            'admin_logintime' =>Yii::t('app', 'Updated At'),
            'admin_ip' => 'Admin Ip',
            'admin_nickname' => 'Admin Nickname',
            'admin_status' => 'Admin Status',
            'admin_deld' => 'Admin Deld',
            'admin_authkey' => 'Admin Authkey',
            'admin_password_reset_token' => 'Admin Password Reset Token',
        ];
    }
    
    
    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                if(isset($this->new_password)){
                    $this->admin_passhash = Yii::$app->security->generatePasswordHash($this->new_password);
                }
                $this->admin_authkey = Yii::$app->security->generateRandomString();
                $this->admin_create = time();
                $this->admin_logintime = time();
                $this->admin_status = 1;
                $this->admin_deld = 0;
//                 $this->admin_role = 10;
                $this->admin_ip = $_SERVER['REMOTE_ADDR'];
            }
            return true;
        } else {
            return false;
        }
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
     * @desc 转化时间格式
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public function convertDate($datetime){
        return date('Y-m-d H:i:s',$datetime);
    }
    
    
//     /**
//      * Finds user by username
//      *
//      * @param string $username
//      * @return static|null
//      */
//     public static function findByUsername($username)
//     { 
//         return static::findOne(['admin_name' => $username, 'admin_status' => self::STATUS_ACTIVE]);
//     }
    
    
//     /**
//      * Validates password
//      *
//      * @param string $password password to validate
//      * @return boolean if password provided is valid for current user
//      */
//     public function validatePassword($password)
//     {
//         return Yii::$app->security->validatePassword($password, $this->user_passhash);
//     }
    
}
