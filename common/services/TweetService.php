<?php
namespace common\services;

use frontendmodels\AdPost;
use frontend\models\Tweet;
use yii\helpers\Url;

class TweetService extends PostService
{

    public function userDoAction($id, $action)
    {
        $topic = Tweet::findTweet($id);
        $user = \Yii::$app->user->getIdentity();
        return UserService::TopicActionB($user, $topic, $action);
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


    public static function replaceTopic($content)
    {
        preg_match_all("/\#([^\#\r\n\s]*)\#/i", $content, $topic);
        if (isset($topic[1])) {
            foreach ($topic[1] as $key => $value) {
                if ($value) {
                    $search = '#' . $value . '#';
                    $url = Url::to(['/ad-tweet/index', 'topic' => $value]);
                    $place = "[{$search}]({$url}) ";
                    $content = str_replace($search, $place, $content);
                }
            }
        }
        return $content;
    }
}