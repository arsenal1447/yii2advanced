<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ad_user}}".
 *
 * @property string $id
 * @property string $user_name
 * @property string $user_passhash
 * @property string $user_email
 * @property integer $user_create
 * @property integer $user_logintime
 * @property string $user_ip
 * @property string $user_nickname
 * @property integer $user_status
 * @property integer $user_deld
 * @property string $user_authkey
 * @property string $user_password_reset_token
 */
class AdUser extends \yii\db\ActiveRecord
{    
    
    public $password;
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
    public function rules()
    {
        return [
            [['user_name', 'user_passhash', 'user_email', 'user_create', 'user_logintime', 'user_authkey','password'], 'required'],
            [['user_status', 'user_deld'], 'integer'],
            [['user_name', 'user_passhash', 'user_nickname', 'user_authkey', 'user_password_reset_token'], 'string', 'max' => 100],
            [['user_email', 'user_ip'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_name' => Yii::t('app', 'User Name'),
            'user_passhash' => Yii::t('app', 'User Passhash'),
            'password' => Yii::t('app', 'Password'),
            'user_email' => Yii::t('app', 'User Email'),
            'user_create' => Yii::t('app', 'User Create'),
            'user_logintime' => Yii::t('app', 'User Logintime'),
            'user_ip' => Yii::t('app', 'User Ip'),
            'user_nickname' => Yii::t('app', 'User Nickname'),
            'user_status' => Yii::t('app', 'User Status'),
            'user_deld' => Yii::t('app', 'User Deld'),
            'user_authkey' => Yii::t('app', 'User Authkey'),
            'user_password_reset_token' => Yii::t('app', 'User Password Reset Token'),
        ];
    }
    
    public function generatePasswordHash($password=null)
    {
        if(empty($password))
        {
            $password=$this->password;
        }
        $this->user_passhash = Yii::$app->getSecurity()->generatePasswordHash($password);
    }
    
    
    
    public function beforeSave($insert)
    {
        if($this->isNewRecord){
            $this->generateAuthKey();
            $this->generatePasswordHash();
            //$this->generatePasswordResetToken();
        }else{
            var_dump($this->password);
            if(!empty($this->password)){
                $this->generatePasswordHash();
            }
        }
        
        return parent::beforeSave($insert);
    }
}
