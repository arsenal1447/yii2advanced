<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "user_account".
 *
 * @property integer $account_id
 * @property string $account_user_id
 * @property string $account_provider
 * @property string $account_client_id
 * @property string $account_data
 * @property string $account_create
 */
class UserAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_user_account}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_user_id', 'account_create'], 'integer'],
            [['account_client_id', 'account_data'], 'required'],
            [['account_data'], 'string'],
            [['account_provider'], 'string', 'max' => 100],
            [['account_client_id'], 'string', 'max' => 255]
        ];
    }

    public function getIsConnected()
    {
        return $this->account_user_id != null;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'ID',
            'account_user_id' => '用户ID',
            'account_provider' => '授权提供商',
            'account_client_id' => 'Client ID',
            'account_data' => 'Data',
            'account_created_at' => '创建时间',
        ];
    }
}
