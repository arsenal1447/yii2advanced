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
//     public $username;
//     public $email;
    public $password;
    public $role;

    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                ['user_name', 'filter', 'filter' => 'trim'],
                ['user_name', 'required'],
                ['user_name', 'match', 'pattern' => '/^[a-z]\w*$/i', 'message' => '{attribute}只能为数字和字母'],
                ['user_name', 'unique', 'targetClass' => '\common\models\User', 'message' => '此{attribute}已经被使用'],
                ['user_name', 'string', 'min' => 4, 'max' => 12],
    
                ['user_email', 'filter', 'filter' => 'trim'],
                ['user_email', 'required'],
                ['user_email', 'email'],
                ['user_email', 'unique', 'targetClass' => '\common\models\User', 'message' => '此{attribute}已经被使用'],
    
                ['password', 'required'],
                ['password', 'string', 'min' => 6],
    
                ['role', 'integer'],
                ['role', 'default', 'value' => User::ROLE_USER],
        ];
    }
    
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_name' => '用户名',
            'password' => '密码',
            'user_email' => '邮箱',
            'role' => '角色',
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
            $user->user_role = $this->role;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();
            return $user;
        }
    
        return null;
    }




}
