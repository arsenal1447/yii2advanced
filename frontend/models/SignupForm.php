<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $user_name;
    public $user_email;
    public $user_pass;
    public $user_passhash;
    public $created_at;
    public $captcha;
    
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['user_name', 'filter', 'filter' => 'trim'],
            ['user_name', 'required'],
            ['user_name', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This user_name has already been taken.'],
            ['user_name', 'string', 'min' => 2, 'max' => 255],

            ['user_email', 'filter', 'filter' => 'trim'],
            ['user_email', 'required'],
            ['user_email', 'email'],
            ['user_email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['user_pass', 'required'],
            ['user_pass', 'string', 'min' => 6],

//             ['captcha', 'captcha']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->user_name = $this->user_name;
            $user->user_email = $this->user_email;
            $user->user_create =time();
            $user->user_logintime =time();
            $user->user_ip = $_SERVER['REMOTE_ADDR'];
            $user->user_status = self::STATUS_ACTIVE;
            $user->user_deld = 0;
            $user->setPassword($this->user_pass);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }




}
