<?php

namespace frontend\models;

use Yii;
use common\models\User;
use common\models\AdPost;
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
 * @property integer $notice_deld
 */
class AdNotice extends \yii\db\ActiveRecord
{
    public $Notice_Deld = 1;
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
            [['notice_from_user_id', 'notice_user_id', 'notice_post_id', 'notice_comment_id', 'notice_status', 'notice_create', 'notice_update','notice_deld'], 'integer'],
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
            'notice_deld' => Yii::t('app', 'Notice Deld'),
        ];
    }
    
    public function getFromUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'notice_from_user_id']);
    }
    
    public function getPost()
    {
        return $this->hasOne(AdPost::className(), ['post_id' => 'notice_post_id']);
    }
    
    public function getLable($type)
    {
        switch ($type) {
            case 'new_comment':
                $lable = Yii::t('app', 'Your follow topic have new reply:');
                break;
            case 'attention':
                $lable = Yii::t('app', 'Attented topic has new reply:');
                break;
            case 'at':
                $lable = Yii::t('app', 'Mention you At:');
                break;
            case 'at_topic':
                $lable = Yii::t('app', 'Mention you topic At:');
                break;
            case 'at_tweet':
                $lable = Yii::t('app', 'Mention you tweet At:');
                break;
            case 'topic_favorite':
                $lable = Yii::t('app', 'Favorited your topic:');
                break;
            case 'topic_thanks':
                $lable = Yii::t('app', 'Thanks your topic:');
                break;
            case 'topic_follow':
                $lable = Yii::t('app', 'Attented your topic:');
                break;
            case 'topic_like':
                $lable = Yii::t('app', 'Up Vote your topic');
                break;
            case 'tweet_like':
                $lable = Yii::t('app', 'Up Vote your tweet');
                break;
            case 'comment_like':
                $lable = Yii::t('app', 'Up Vote your reply');
                break;
            case 'topic_mark_wiki':
                $lable = Yii::t('app', 'has mark your topic as wiki:');
                break;
            case 'topic_mark_excellent':
                $lable = Yii::t('app', 'has recomended your topic:');
                break;
            case 'comment_append':
                $lable = Yii::t('app', 'Commented topic has new update:');
                break;
            case 'attention_append':
                $lable = Yii::t('app', 'Attented topic has new update:');
                break;
    
            default:
                $lable = '';
                break;
        }
        return $lable;
    }
    
    
    
    
    
}
