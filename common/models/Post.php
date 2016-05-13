<?php
namespace common\models;
use Yii;
// use base\BaseActiveRecord;
use common\components\db\MyActiveRecord;
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
class Post extends MyActiveRecord
{
    const TYPE = 'topic';
    /**
     * 发布
     */
    const STATUS_ACTIVE = 0;
    
    /**
     * 被删除
     */
    const STATUS_DELD = 1;

    /**
     * 推荐
     */
    const STATUS_EXCELLENT = 2;
    /**
     * 置顶
     */
    const STATUS_TOP = 3;

    /**
     * 删除
     */
    const STATUS_DELETED = 0;
    /**
     * @var boolean CC 协议
     */
    public $cc;

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
                 [['cc'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
                //'id' => 'ID',
                'post_id' => 'ID',
                'post_user_id' => '用户ID',
                //'user_name' => '用户名',
                'post_title' => '标题',
                'post_content' => '内容',
                'post_create' => '创建时间',
                'post_update' => '修改时间',
                'post_view_count' => '浏览数',
                'post_reply_count' => '回帖数',
                'post_status' => '状态',
                'category_name' => '分类',//用于点击排序和翻译
                'username' => '用户',//用于点击排序和翻译
                'post_order' => '排序',//用于点击排序和翻译
                'post_last_user_id' => 'Last User ID',
                'post_last_comment_user_name' => 'Last User Name',
                'post_last_comment_time' => 'Last Modify Time',
                 'cc' => '注明版权信息（原创文章欢迎使用）',
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

    public function getLike()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'like', $this->post_user_id);
    }

    public function getFollow()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'follow', $this->post_user_id);
    }

    public function getHate()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'hate', $this->post_user_id);
    }

    public function getFavorite()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'favorite', $this->post_user_id);
    }

    public function getThanks()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TYPE, 'thanks', $this->post_user_id);
    }

    public function isCurrent()
    {
        return $this->post_user_id == Yii::$app->user->id;
    }

//     /**
//      * @desc 获取帖子标题
//      * @param string $id
//      * @return mixed
//      */
//     public static function getTitleById($id)
//     {
//         $model = Post::find()->select(['post_title'])->where(['post_id' => $id,'post_deld'=>0,'post_status'=>0])->asArray()->one();

//         if($model){
//             return $model['post_title'];
//         }else{
//             return null;
//         }
//     }

    /**
     * @desc 更新每个帖子的阅读量,每次查看更新一次
     * @param string $id
     * @return mixed
     */
    public static function UpViewCount($id)
    {
        $model = Post::find()->select(['post_id','post_view_count'])->where(['post_id' => $id,'post_deld'=>0,'post_status'=>0])->one();

        $redis = Yii::$app->redis;

        $currentcount = Post::getViewCount($id);
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

        $attributes['post_reply_count'] = new Expression("[[post_reply_count]]+:bp0", [":bp0" => 1]);
        $attributes['post_last_user_id'] = Ad::getIdentity()->id;
        $attributes['post_last_comment_user_name'] = Ad::getIdentity()->user_name;
        $attributes['post_last_comment_time'] = TTimeHelper::getCurrentTime();

        Post::updateAll($attributes, ['post_id' => intval($postId)]);
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

    /**
     * @param bool $status
     * @return array|mixed
     */
    public static function getStatuses($status = false)
    {
        $statuses = [
            self::STATUS_DELETED => Yii::t('common', 'DELETED'),
            self::STATUS_ACTIVE => Yii::t('common', 'ACTIVE'),
            self::STATUS_EXCELLENT => Yii::t('common', 'EXCELLENT'),
            self::STATUS_TOP => Yii::t('common', 'TOP'),
        ];

        return $status !== false ? ArrayHelper::getValue($statuses, $status) : $statuses;
    }

}
