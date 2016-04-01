<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%ad_admin}}".
 *
 * @property string $id
 * @property string $admin_name
 * @property string $admin_passhash
 * @property integer $admin_role
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
    public $ad_password;
    
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
            [['admin_name', 'admin_email','ad_password', 'admin_authkey'], 'required'],
            [['admin_role', 'admin_create', 'admin_logintime', 'admin_status', 'admin_deld'], 'integer'],
            [['admin_name', 'ad_password', 'admin_nickname', 'admin_authkey', 'admin_password_reset_token'], 'string', 'max' => 100],
            [['admin_email', 'admin_ip'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'admin_name' => Yii::t('app', 'Admin Name'),
            'admin_passhash' => Yii::t('app', 'Admin Passhash'),
            'ad_password' => Yii::t('app', 'Admin Passhash'),
            'admin_role' => Yii::t('app', 'Admin Role'),
            'admin_email' => Yii::t('app', 'Admin Email'),
            'admin_create' => Yii::t('app', 'Admin Create'),
            'admin_logintime' => Yii::t('app', 'Admin Logintime'),
            'admin_ip' => Yii::t('app', 'Admin Ip'),
            'admin_nickname' => Yii::t('app', 'Admin Nickname'),
            'admin_status' => Yii::t('app', 'Admin Status'),
            'admin_deld' => Yii::t('app', 'Admin Deld'),
            'admin_authkey' => Yii::t('app', 'Admin Authkey'),
            'admin_password_reset_token' => Yii::t('app', 'Admin Password Reset Token'),
        ];
    }
    
    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                var_dump($this->ad_password);
                if(isset($this->ad_password)){
                    $this->admin_passhash = Yii::$app->security->generatePasswordHash($this->ad_password);
                }
                var_dump($this->admin_passhash);
//                 die('83');
                $this->admin_authkey = Yii::$app->security->generateRandomString();
                $this->admin_create = time();
                $this->admin_logintime = time();
                $this->admin_status = 10;
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
    
}
