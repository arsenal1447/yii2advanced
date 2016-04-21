<?php
namespace common\models;
use Yii;
use base\BaseActiveRecord;
use base\Ad;
use common\helpers\TTimeHelper;
use yii\db\Expression;

/**
 * This is the model class for table "ad_post".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $post_user
 * @property string $user_name
 * @property string $post_title
 * @property string $post_create
 * @property string $post_update
 * @property integer $post_viewcount
 * @property integer $posts
 * @property integer $status
 * @property string $note1
 * @property string $note2
 * @property integer $last_post_user
 * @property string $last_user_name
 * @property string $last_post_update
 */
class AdPost extends BaseActiveRecord
{
    /**
     * 发布
     */
    const STATUS_ACTIVE = 0;
    
    /**
     * 删除
     */
    const STATUS_DELETED = 0;
    
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_post}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                [['post_id','post_user','post_title','post_content','post_create'],'required'],
                [['post_id','post_user','post_viewcount','post_status'],'integer'],
                [['post_create','post_update'],'safe'],
                [['post_content'],'string'],
                //[['user_name','last_user_name'],'string','max' => 32],
                [['post_title'],'string','max' => 256],
                //[['note1','note2'],'string','max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
                //'id' => 'ID',
                'post_id' => 'Post ID',
                'post_user' => '用户ID',
                //'user_name' => '用户名',
                'post_title' => '标题',
                'post_content' => '内容',
                'post_create' => '创建时间',
                'post_update' => '修改时间',
                'post_viewcount' => '浏览数',
                'post_replycount' => '回帖数',
                'post_status' => '状态',
//                 'note1' => 'Note1',
//                 'note2' => 'Note2',
                'post_last_user_id' => 'Last User ID',
                'post_last_user_name' => 'Last User Name',
                'post_last_update' => 'Last Modify Time'
        ];
    }

    private $_post_content;

    public function getpost_content()
    {
        if ($this->_post_content == null)
        {
            $this->_post_content = '';
        }
        return $this->_post_content;
    }

    public function setpost_content($value)
    {
        $this->_post_content = $value;
    }

    public static function updateLastData($threadId)
    {
        $attributes = [];

        $attributes['post_replycount'] = new Expression("[[post_replycount]]+:bp0", [
                ":bp0" => 1
        ]);

        $attributes['post_last_user_id'] = Ad::getIdentity()->id;
        $attributes['post_last_user_name'] = Ad::getIdentity()->username;
        $attributes['post_last_update'] = TTimeHelper::getCurrentTime();

        Thread::updateAll($attributes, [
                'id' => intval($threadId)
        ]);
    }
}
