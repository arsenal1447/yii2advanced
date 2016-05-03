<?php
namespace frontend\models;

use common\components\Mailer;
use yii\base\Model;

class AccountForm extends Model
{
    /** @var string */
    public $email;

    /** @var string */
    public $username;

    /** @var string */
    public $tagline;

    /** @var string */
    public $new_password;

    /** @var string */
    public $current_password;

    /** @var Module */
    protected $module;

    /** @var Mailer */
    protected $mailer;

    /** @var User */
    private $_user;

    /** @return User */
    public function getUser()
    {
        if ($this->_user == null) {
            $this->_user = \Yii::$app->user->identity;
        }

        return $this->_user;
    }

    /** @inheritdoc */
    public function __construct(Mailer $mailer, $config = [])
    {
        $this->mailer = $mailer;
//         $this->module = \Yii::$app->getModule('user');
        $this->module = \Yii::$app->user;
        $this->setAttributes([
            'user_name' => $this->user->user_name,
            'user_email'    => $this->user->user_email,
            'user_tagline'  => $this->user->user_tagline,
        ], false);
        parent::__construct($config);
    }

    /** @inheritdoc */
    public function rules()
    {
        return [
            [['username', 'user_email', 'current_password'], 'required'],
            [['username', 'user_email'], 'filter', 'filter' => 'trim'],
            ['username', 'match', 'pattern' => '/^[a-zA-Z]\w+$/'],
            ['username', 'string', 'min' => 3, 'max' => 20],
            ['email', 'email'],
            [['email', 'username'], 'unique', 'when' => function ($model, $attribute) {
                return $this->user->$attribute != $model->$attribute;
            }, 'targetClass' => '\common\models\User', 'message' => '此{attribute}已经被使用。'],
            ['new_password', 'string', 'min' => 6],
            ['user_tagline', 'string', 'max' => 40],
            ['current_password', function ($attr) {
                if (!\Yii::$app->security->validatePassword($this->$attr, $this->user->password_hash)) {
                    $this->addError($attr, '当前密码是输入错误');
                }
            }]
        ];
    }

    /** @inheritdoc */
    public function attributeLabels()
    {
        return [
            'email'            => 'Email',
            'username'         => '用户名',
            'new_password'     => '新密码',
            'tagline'          => '一句话介绍',
            'current_password' => '当前密码'
        ];
    }

    /** @inheritdoc */
    public function formName()
    {
        return 'settings-form';
    }

    /**
     * Saves new account settings.
     *
     * @return bool
     */
    public function save()
    {
        if ($this->validate()) {
            $this->user->username = $this->user_name;
            // 新密码没填写 则为不修改密码
            ($this->new_password) ? $this->user->password = $this->new_password : '';
            $this->user->tagline = $this->user_tagline;
            return $this->user->save();
        }

        return false;
    }
}
