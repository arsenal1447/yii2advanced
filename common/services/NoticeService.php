<?php
namespace common\services;

use common\models\Reply;
use common\models\User;
use frontend\models\AdNotice;
use frontend\modules\topic\models\Topic;
use common\models\AdPost;
use frontend\modules\user\models\UserMeta;
use yii\base\Exception;
use yii\helpers\VarDumper;

class NoticeService
{
    public $notifiedUsers = [];

    /**
     * 评论和@用户会有通知
     * @param User $fromUser
     * @param Topic $topic
     * @param PostComment $comment
     * @param string $rawComment
     * @throws Exception
     */
    public function newReplyNotify(User $fromUser, Topic $topic, Reply $comment, $rawComment = '')
    { 
        foreach ($topic->follower as $key => $value) {
//             $users[$value->meta_user_id] = $value->meta_user_id;
            $users[$value['meta_user_id']] = $value['meta_user_id'];
        }
        
        // Notify mentioned users
        $this->batchNotify('at',$fromUser,$this->removeDuplication($comment->parse($rawComment)),$topic,$comment);
       
        // 通知关注的用户
//         print_r($users);die;
        $this->batchNotify('new_comment', $fromUser, $this->removeDuplication($users), $topic, $comment);
    }

    /**
     * 内容@用户会有通知
     * @param User $fromUser
     * @param Post $post
     * @param string $rawContent
     * @throws Exception
     */
    public function newPostNotify(User $fromUser, Post $post, $rawContent = '')
    {
        $this->batchNotify(
            'at_' . $post->type,
            $fromUser,
            $this->removeDuplication(PostService::parse($rawContent)),
            $post
        );
    }

    /**
     * 点赞和其他动作通知
     * @param $type
     * @param $fromUserId
     * @param $toUserId
     * @param Post $post
     * @param PostComment $comment
     * @throws Exception
     */
    public function newActionNotify($type, $fromUserId, $toUserId, Post $post, PostComment $comment = null)
    {

        $model = new AdNotice();

        $model->setAttributes([
            'from_user_id' => $fromUserId,
            'user_id' => $toUserId,
            'post_id' => $post->id,
            'comment_id' => $comment ? $comment->id : 0,
            'data' => $comment ? $comment->comment : $post->content,
            'type' => $type,
        ]);

        if ($model->save()) {
            User::updateAllCounters(['notification_count' => 1], ['id' => $toUserId]);
        } else {
            throw new Exception(array_values($model->getFirstErrors())[0]);
        }
    }

    /**
     * 批量处理通知
     * @param $type
     * @param User $fromUser
     * @param $users
     * @param Post $post
     * @param PostComment $comment
     * @throws Exception
     */
    public function batchNotify($type, User $fromUser, $users, AdPost $post, Reply $comment = null)
    {
        foreach ($users as $key => $value) {
            if ($fromUser->user_id == $key) {
                continue;
            }
            $model = new AdNotice();
            $model->setAttributes([
                'notice_from_user_id' => $fromUser->id,
                'notice_user_id' => $key,
                'notice_post_id' => $post->post_id,
                'notice_comment_id' => $comment ? $comment->reply_id : 0,
                'notice_data' => $comment ? $comment->reply_content : $post->post_content,
                'notice_type' => $type,
                'notice_status' => 0,
                'notice_create' => time(),
//                 'notice_create' => time(),
            ]);
            $this->notifiedUsers[] = $key;
            if ($model->save()) {
                User::updateAllCounters(['user_notice_count' => 1], ['user_id' => $key]);
            } else {
                throw new Exception(array_values($model->getFirstErrors())[0]);
            }
        }
    }

    /**
     * 去掉重复 避免通知重复
     * @param $users
     * @return array
     */
    public function removeDuplication($users)
    {  
        $notYetNotifyUsers = [];
        foreach ($users as $key => $value) {
            if (!in_array($key, $this->notifiedUsers)) {
                $notYetNotifyUsers[$key] = $value;
                $this->notifiedUsers[] = $key;
            }
        }
        return $notYetNotifyUsers;
    }

    /**
     * 查找用户的动作通知
     * @param UserMeta $meta
     * @return null|static
     */
    public function findUserActionNotify(UserMeta $meta)
    {
        if ($meta->meta_target_type == 'comment') {
            $condition['notice_comment_id'] = $meta->meta_target_id;
        } else {
            $condition['notice_post_id'] = $meta->meta_target_id;
        }
        return AdNotice::findOne([
                'notice_from_user_id' => $meta->meta_user_id,
                'notice_type' => $meta->meta_target_type . '_' . $meta->meta_type,
            ] + $condition);
    }
}