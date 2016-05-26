<?php
namespace common\services;

use frontend\models\AdNotice;
use frontend\models\AdPost;

class TopicService extends PostService
{

    public function userDoAction($id, $action)
    {
        $topic = AdPost::findTopic($id);
        $user = \Yii::$app->user->getIdentity();
        if (in_array($action, ['like', 'hate'])) {
            return UserService::TopicActionA($user, $topic, $action);
        } else {
            return UserService::TopicActionB($user, $topic, $action);
        }
    }

    /**
     * 撤销帖子
     * @param AdPost $topic
     */
    public static function revoke(AdPost $topic)
    {
        $topic->setAttributes(['post_status' => AdPost::STATUS_ACTIVE]);
        $topic->save();
    }

    /**
     * 加精华
     * @param AdPost $topic
     */
    public static function excellent(AdPost $topic)
    {
        $action = ($topic->post_status == AdPost::STATUS_ACTIVE) ? AdPost::STATUS_EXCELLENT : AdPost::STATUS_ACTIVE;
        $topic->setAttributes(['post_status' => $action]);
        $topic->save();
    }
}