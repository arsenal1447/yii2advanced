<?php
namespace common\models;
use Yii;
use base\BaseActiveRecord;
use base\Ad;
use common\helpers\TTimeHelper;
use yii\db\Expression;
use frontend\models\UserMeta;

/**
 * This is the model class for table "ad_post".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $post_user_id
 * @property string $user_name
 * @property string $post_title
 * @property string $post_create
 * @property string $post_update
 * @property integer $post_view_count
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
    const TYPE = 'topic';
    /**
     * 发布
     */
    const STATUS_ACTIVE = 0;

    /**
     * 删除
     */
    const STATUS_DELETED = 0;

    /**
     * 推荐
     */
    const STATUS_EXCELLENT = 2;


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
                [['post_id','post_user_id','post_title','post_content','post_create'],'required'],
                [['post_id','post_user_id','post_view_count','post_status'],'integer'],
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
                'post_user_id' => '用户ID',
                //'user_name' => '用户名',
                'post_title' => '标题',
                'post_content' => '内容',
                'post_create' => '创建时间',
                'post_update' => '修改时间',
                'post_view_count' => '浏览数',
                'post_reply_count' => '回帖数',
                'post_status' => '状态',
//                 'note1' => 'Note1',
//                 'note2' => 'Note2',
                'post_last_user_id' => 'Last User ID',
                'post_last_comment_user_name' => 'Last User Name',
                'post_last_comment_time' => 'Last Modify Time'
        ];
    }

    /**
     * @desc  发帖的预处理
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert) {
        $userid =  Yii::$app->user->identity->id;
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->post_user_id = $userid;
                $this->post_user_name = Yii::$app->user->identity->user_name;
                $this->post_create = time();
                $this->post_update = time();
                $this->post_status = 0;
                $this->post_view_count = 10;
                $this->post_deld = 0;
                $this->post_type = 'topic';
            }else{//更新修改时间
                $this->post_update = time();
                $this->post_last_comment_time = time();
                $this->post_last_comment_user_name = Yii::$app->user->identity->user_name;
                $this->post_last_user_id = Yii::$app->user->identity->id;
            }
            return true;
        } else {
            return false;
        }
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

    public function getLike()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'like', $this->post_id);
    }

    public function getFollow()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'follow', $this->post_id);
    }

    public function getHate()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'hate', $this->post_id);
    }

    public function getFavorite()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'favorite', $this->post_id);
    }

    public function getThanks()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'thanks', $this->post_id);
    }

    public function isCurrent()
    {
        return $this->post_user_id == Yii::$app->user->id;
    }

//     public static function updateLastData($threadId)
//     {
//         $attributes = [];

//         $attributes['post_reply_count'] = new Expression("[[post_reply_count]]+:bp0", [
//                 ":bp0" => 1
//         ]);

//         $attributes['post_last_user_id'] = Ad::getIdentity()->id;
//         $attributes['post_last_comment_user_name'] = Ad::getIdentity()->username;
//         $attributes['post_last_comment_time'] = TTimeHelper::getCurrentTime();

//         Thread::updateAll($attributes, [
//                 'id' => intval($threadId)
//         ]);
//     }

    /**
     * @desc 获取帖子标题
     * @param string $id
     * @return mixed
     */
    public static function getTitleById($id)
    {
        $model = AdPost::find()->select(['post_title'])->where(['post_id' => $id,'post_deld'=>0,'post_status'=>0])->asArray()->one();

        if($model){
            return $model['post_title'];
        }else{
            return null;
        }
    }

//     /**
//      * @desc 更新每个帖子的阅读量,每次查看更新一次 ,使用redis
//      * @param string $id
//      * @return mixed
//      */
//     public static function UpViewCount($id)
//     {
//         $model = AdPost::find()->select(['post_id','post_view_count'])->where(['post_id' => $id,'post_deld'=>0,'post_status'=>0])->one();

//         $redis = Yii::$app->redis;

//         $currentcount = AdPost::getViewCount($id);
//         $count = 0;
//         if($currentcount>0){
//             $count = $currentcount;
//         }else{
//             $count = $model->post_view_count;
//         }

//         $redis->hset("counthash","pid_".$id,$count);
//         $result = $redis->hincrby('counthash', "pid_".$id, '1');
//     }


//     /**
//      * @desc 更新每个帖子的阅读量,每次查看更新一次,使用redis
//      * @param string $id
//      * @return mixed
//      */
//     public static function getViewCount($id)
//     {
//         $redis = Yii::$app->redis;
//         return $redis->hget('counthash', "pid_".$id);
//     }
    /**
     * @desc 更新每个帖子的阅读量,每次查看更新一次
     * @param string $id
     * @return mixed
     */
    public static function UpViewCount($id)
    {
        $model = AdPost::find()->select(['post_id','post_view_count'])->where(['post_id' => $id,'post_deld'=>0,'post_status'=>0])->one();

        $redis = Yii::$app->redis;

        $currentcount = AdPost::getViewCount($id);
        $count = 0;
        if($currentcount>0){
            $count = $currentcount;
        }else{
            $count = $model->post_view_count;
        }

        $redis->hset("counthash","pid_".$id,$count);
        $result = $redis->hincrby('counthash', "pid_".$id, '1');
    }


    /**
     * @desc 更新每个帖子的阅读量,每次查看更新一次
     * @param string $id
     * @return mixed
     */
    public static function getViewCount($id)
    {
        $redis = Yii::$app->redis;
        return $redis->hget('counthash', "pid_".$id);
    }


    public static function updateLastData($postId)
    {
        $attributes = [];

        $attributes['post_reply_count'] = new Expression("[[post_reply_count]]+:bp0", [
                ":bp0" => 1
        ]);

        $attributes['post_last_user_id'] = Ad::getIdentity()->id;
        $attributes['post_last_comment_user_name'] = Ad::getIdentity()->user_name;
        $attributes['post_last_comment_time'] = TTimeHelper::getCurrentTime();

        AdPost::updateAll($attributes, [
        'post_id' => intval($postId)
        ]);
    }

    /**
     * @desc 转化时间格式
     * @param 时间戳格式  $datetime
     * @return 返回 2016-03-02 03:07:49 这种格式
     */
    public static function convertDate($datetime){
        return date('Y-m-d H:i:s',$datetime);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'post_user_id']);
    }

//     public function getUserInfo()
//     {
//         return $this->hasOne(UserInfo::className(), ['user_id' => 'user_id']);
//     }


    public function getCategory()
    {
        return $this->hasOne(PostMeta::className(), ['cat_id' => 'post_cate_id']);
    }

}
