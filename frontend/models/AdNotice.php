<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "{{%ad_notice}}".
 *
 * @property integer $notice_id
 * @property integer $notice_from_user_id
 * @property integer $notice_user_id
 * @property integer $notice_post_id
 * @property integer $notice_comment_id
 * @property string $notice_type
 * @property string $notice_data
 * @property integer $notice_status
 * @property integer $notice_create
 * @property integer $notice_update
 */
class AdNotice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_notice}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notice_from_user_id', 'notice_user_id', 'notice_post_id', 'notice_type', 'notice_status', 'notice_create',], 'required'],
            [['notice_from_user_id', 'notice_user_id', 'notice_post_id', 'notice_comment_id', 'notice_status', 'notice_create', 'notice_update'], 'integer'],
            [['notice_data'], 'string'],
            [['notice_type'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'notice_id' => Yii::t('app', 'Notice ID'),
            'notice_from_user_id' => Yii::t('app', 'Notice From User ID'),
            'notice_user_id' => Yii::t('app', 'Notice User ID'),
            'notice_post_id' => Yii::t('app', 'Notice Post ID'),
            'notice_comment_id' => Yii::t('app', 'Notice Comment ID'),
            'notice_type' => Yii::t('app', 'Notice Type'),
            'notice_data' => Yii::t('app', 'Notice Data'),
            'notice_status' => Yii::t('app', 'Notice Status'),
            'notice_create' => Yii::t('app', 'Notice Create'),
            'notice_update' => Yii::t('app', 'Notice Update'),
        ];
    }
}
