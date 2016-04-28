<?php
namespace frontend\models;

use common\models\AdPost;
use frontend\modules\user\models\UserMeta;
use yii\web\NotFoundHttpException;
use Yii;

class Tweet extends AdPost
{
    const TweetTYPE = 'tweet';

    public function getLike()
    {
        $model = new UserMeta();
        return $model->isUserAction(self::TweetTYPE, 'like', $this->post_id);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_content'], 'required'],
            [['post_meta_id', 'post_user_id', 'post_view_count', 'post_reply_count', 'post_favorite_count', 'post_like_count', 'post_thanks_count', 'post_hate_count', 'post_status', 'post_order', 'post_create', 'post_update'], 'integer'],
            [['post_content'], 'string', 'min' => 3, 'max' => 500],
            [['post_meta_id'], 'default', 'value' => 0],
            [['post_title'], 'default', 'value' => ''],
        ];
    }
    
    /**
     * @desc  发帖的预处理
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert) {
        $userid =  Yii::$app->user->identity->id;
        if (parent::beforeSave($insert)) {
//                 $this->post_user_id = $userid;
//                 $this->post_user_name = Yii::$app->user->identity->user_name;
//                 $this->post_create = time();
//                 $this->post_update = time();
//                 $this->post_status = 0;
//                 $this->post_view_count = 10;
//                 $this->post_deld = 0;
                $this->post_type = Tweet::TweetTYPE;
            return true;
        } else {
            return false;
        }
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
        if (!$model = Yii::$app->cache->get('topic' . $id)) {
            $model = static::find()
                ->where($condition)
                ->andWhere(['id' => $id, 'type' => self::TYPE])
                ->one();
        }
        if ($model) {
            Yii::$app->cache->set('topic' . $id, $model, 0);
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    /**
     * 通过ID获取指定动弹
     * @param $id
     * @return array|Topic|null|\yii\db\ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function findTweet($id)
    {
        return static::findModel($id, ['>=', 'status', self::STATUS_ACTIVE]);
    }

    /**
     * 获取已经删除过的动弹
     * @param $id
     * @return array|null|\yii\db\ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function findDeletedTweet($id)
    {
        return static::findModel($id, ['>=', 'status', self::STATUS_DELETED]);
    }

}