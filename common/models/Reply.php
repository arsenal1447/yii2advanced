<?php
namespace common\models;
use Yii;
use base\BaseActiveRecord;

/**
 * This is the model class for table "reply".
 *
 * @property integer $reply_id
 * @property integer $reply_post
 * @property integer $reply_user
 * @property string $reply_username
 * @property string $reply_title
 * @property string $reply_content
 * @property string $reply_create
 * @property string $reply_edittime
 * @property integer $reply_support
 * @property integer $reply_against
 * @property integer $reply_floor
 * @property string $reply_note
 */
class Reply extends BaseActiveRecord
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
                [['reply_post','reply_user','reply_username','reply_content','reply_create'],'required'],
                [['reply_post','reply_user','reply_support','reply_against','reply_floor'],'integer'],
                [['reply_content'],'string'],
                [['reply_create','reply_edittime'],'safe'],
                [['reply_username'],'string','max' => 32],
                [['reply_title'],'string','max' => 128],
                [['reply_note'],'string','max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
                'reply_id' => 'ID',
                'reply_post' => 'Post ID',
                'reply_user' => 'User ID',
                'reply_username' => 'User Name',
                'reply_title' => '标题',
                'reply_content' => '内容',
                'reply_create' => 'Create Time',
                'reply_edittime' => 'Edit Time',
                'reply_support' => '支持数',
                'reply_against' => '反对数',
                'reply_floor' => '楼层',
                'reply_note' => 'Note'
        ];
    }
}
