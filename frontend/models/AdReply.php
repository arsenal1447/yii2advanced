<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ad_reply}}".
 *
 * @property integer $reply_id
 * @property integer $reply_post
 * @property string $reply_content
 * @property integer $reply_create
 * @property integer $reply_user
 * @property string $reply_ip
 * @property string $reply_user_name
 * @property string $reply_title
 * @property integer $reply_update
 * @property integer $reply_support
 * @property integer $reply_against
 * @property integer $reply_floor
 * @property string $reply_note
 * @property integer $reply_deld
 * @property integer $reply_status
 */
class AdReply extends \yii\db\ActiveRecord
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
            [['reply_id', 'reply_post', 'reply_content', 'reply_user', 'reply_user_name', 'reply_update'], 'required'],
            [['reply_id', 'reply_post', 'reply_create', 'reply_user', 'reply_update', 'reply_support', 'reply_against', 'reply_floor', 'reply_deld', 'reply_status'], 'integer'],
            [['reply_content'], 'string'],
            [['reply_ip', 'reply_user_name', 'reply_note'], 'string', 'max' => 50],
            [['reply_title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reply_id' => Yii::t('app', 'Reply ID'),
            'reply_post' => Yii::t('app', 'Reply Post'),
            'reply_content' => Yii::t('app', 'Reply Content'),
            'reply_create' => Yii::t('app', 'Reply Create'),
            'reply_user' => Yii::t('app', 'Reply User'),
            'reply_ip' => Yii::t('app', 'Reply Ip'),
            'reply_user_name' => Yii::t('app', 'Reply Username'),
            'reply_title' => Yii::t('app', 'Reply Title'),
            'reply_update' => Yii::t('app', 'Reply Edittime'),
            'reply_support' => Yii::t('app', 'Reply Support'),
            'reply_against' => Yii::t('app', 'Reply Against'),
            'reply_floor' => Yii::t('app', 'Reply Floor'),
            'reply_note' => Yii::t('app', 'Reply Note'),
            'reply_deld' => Yii::t('app', 'Reply Deld'),
            'reply_status' => Yii::t('app', 'Reply Status'),
        ];
    }
}
