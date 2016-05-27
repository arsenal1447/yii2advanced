<?php

namespace frontend\models;

use Yii;
use common\models\PostTag;
use common\models\Search;
use common\services\TopicService;
use common\models\Post;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "{{%ad_post}}".
 *
 * @property string $post_id
 * @property string $post_title
 * @property integer $post_cate_id
 * @property integer $post_user_id
 * @property string $post_content
 * @property integer $post_create
 * @property integer $post_update
 * @property integer $post_view_count
 * @property integer $post_status
 * @property integer $post_deld
 */
class AdPost extends Post
{
    const TYPE = 'topic';

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
            [['post_title', 'post_content'], 'required'],
            [['post_cate_id', 'post_user_id', 'post_create', 'post_update', 'post_view_count', 'post_status', 'post_deld'], 'integer'],
            [['post_content'], 'string'],
            [['post_title'], 'string', 'max' => 100],
            [['post_excerpt', 'post_image', 'post_tags'], 'string', 'max' => 255],
            [['cc'], 'safe']
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => Yii::t('app', 'Post ID'),
            'post_title' => Yii::t('app', 'Post Title'),
            'post_cate_id' => Yii::t('app', 'Post Cateid'),
            'post_user_id' => Yii::t('app', 'Post User'),
            'post_content' => Yii::t('app', 'Post Content'),
            'post_excerpt' => '摘要',
            'post_image' => '封面图片',
            'post_tags' => '标签',
            'post_create' => Yii::t('app', 'Post Create'),
            'post_update' => Yii::t('app', 'Post Update'),
            'post_view_count' => Yii::t('app', 'Post Viewcount'),
            'post_status' => Yii::t('app', 'Post Status'),
            'post_deld' => Yii::t('app', 'Post Deld'),
            'cc' => '注明版权信息（原创文章欢迎使用）',
        ];
    }

//     public function getLike()
//     {
//         $model = new UserMeta();
//         return $model->isUserAction(self::TYPE, 'like', $this->post_user_id);
//     }

//     public function getFollow()
//     {
//         $model = new UserMeta();
//         return $model->isUserAction(self::TYPE, 'follow', $this->post_user_id);
//     }

//     public function getHate()
//     {
//         $model = new UserMeta();
//         return $model->isUserAction(self::TYPE, 'hate', $this->post_user_id);
//     }

//     public function getFavorite()
//     {
//         $model = new UserMeta();
//         return $model->isUserAction(self::TYPE, 'favorite', $this->post_user_id);
//     }

//     public function getThanks()
//     {
//         $model = new UserMeta();
//         return $model->isUserAction(self::TYPE, 'thanks', $this->post_user_id);
//     }
    
    public function isCurrent()
    {
        return $this->post_user_id == Yii::$app->user->id;
    }

    /**
     * 获取关注者
     * @return static
     */
    public function getFollower()
    {
        return $this->hasMany(UserMeta::className(), ['meta_target_id' => 'post_id'])
        ->where(['meta_target_type' => self::TYPE, 'meta_type' => 'follow']);
    }

    /**
     * 通过ID获取指定话题
     * @param $id
     * @param string $condition
     * @return array|null|\yii\db\ActiveRecord|static
     * @throws NotFoundHttpException
     */
    public static function findModel($id, $condition = '')
    {
        //        if (!($model = Yii::$app->cache->get('topic' . $id))) {
        $model = static::find()
            ->where($condition)
            ->andWhere(['post_id' => $id, 'post_type' => self::TYPE])
            ->one();
        //        }
        if ($model) {
            //            Yii::$app->cache->set('topic' . $id, $model, 0);
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

    }

    /**
     * 通过ID获取指定话题
     * @param $id
     * @return array|Topic|null|\yii\db\ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function findTopic($id)
    {
        return static::findModel($id, ['>=', 'post_status', self::STATUS_ACTIVE]);
    }

    /**
     * 获取已经删除过的话题
     * @param $id
     * @return array|Topic|null|\yii\db\ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function findDeletedTopic($id)
    {
        return static::findModel($id, ['>=', 'post_status', self::STATUS_DELETEDzxx]);//bug需要修改
    }



    public function beforeSave($insert){
        if (parent::beforeSave($insert)) {
            if ($this->post_tags) {
                $this->addTags(explode(',', $this->post_tags));
            }
            $this->post_content = TopicService::replace($this->post_content).($this->cc ? Yii::t('app', 'cc {username}', ['username' => Yii::$app->user->identity->user_name]) : '');
           
            if ($insert) {
                $this->post_user_id = (($this->post_user_id) ?: Yii::$app->user->id);
                $this->post_type = self::TYPE;
                $this->post_last_comment_time = $this->post_create = $this->post_update =time();
            }
            return true;
        } else {
            return false;
        }
    }

//     public function afterSave($insert, $changedAttributes)
//     {
//         parent::afterSave($insert, $changedAttributes);
//         if (isset(Yii::$app->params['setting']) && Yii::$app->params['setting']['xunsearch']) {
//             if ($insert) {
//                 $search = new Search();
//                 $search->topic_id = $this->id;
//                 $search->status = self::STATUS_ACTIVE;
//             } else {
//                 $search = Search::findOne($this->id);
//                 if (!$search) {
//                     // 如果立即修改 会因为在 xunsearch 找不到而不能 save
//                     return false;
//                 }
//                 $search->status = $this->status;
//             }
//             $search->title = $this->title;
//             $search->content = $this->content;
//             $search->updated_at = $this->updated_at;
//             $search->save();
//         }
//     }

    /**
     * 最后回复更新
     * @param string $username
     * @return bool
     */
    public function lastCommentToUpdate($username = '')
    {
        $this->setAttributes([
            'post_last_comment_user_name' => $username,
            'post_last_comment_time' => time()
        ]);
        return $this->save();
    }

    /**
     * 添加标签
     * @param array $tags
     * @return bool
     */
    public function addTags(array $tags)
    {
        $return = false;
        $tagItem = new PostTag();
        foreach ($tags as $tag) {
            $_tagItem = clone $tagItem;
            $tagRaw = $_tagItem::findOne(['tag_name' => $tag]);
            if (!$tagRaw) {
                $_tagItem->setAttributes([
                    'tag_name' => $tag,
                    'tag_count' => 1,
                    'tag_create' => time(),
                    'tag_update' => time(),
                ]);
                if ($_tagItem->save(false)) {
                    $return = true;
                }
            } else {
                $tagRaw->updateCounters(['tag_count' => 1]);
            }
        }
        return $return;
    }






}
