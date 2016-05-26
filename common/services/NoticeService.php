<?php
namespace common\services;

use common\models\Reply;
use common\models\User;
use frontend\models\AdNotice;
use frontend\models\AdPost;
use common\models\Post;
use frontend\models\UserMeta;
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
    public function newReplyNotify(User $fromUser, AdPost $topic, Reply $comment, $rawComment = '')
    {
//         echo "<pre>";
        foreach ($topic->follower as $key => $value) {
//             print_R($value);
//             $users[$value->meta_user_id] = $value->meta_user_id;
            $users[$value['meta_user_id']] = $value['meta_user_id'];
        }

//         die('31');
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
            'at_' . $post->post_type,
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
    public function newActionNotify($type, $fromUserId, $toUserId, Post $post, Reply $comment = null)
    {
        $model = new AdNotice();
        $model->setAttributes([
            'notice_from_user_id' => $fromUserId,
            'notice_user_id' => $toUserId,
            'notice_post_id' => $post->post_id,
            'notice_comment_id' => $comment ? $comment->reply_id : 0,
            'notice_data' => $comment ? $comment->reply_content : $post->post_content,
            'notice_type' => $type,
            'notice_status' => AdNotice::Notice_Normal,
            'notice_create' =>time(),
        ]);
        if ($model->save()) {
            User::updateAllCounters(['user_notice_count' => 1], ['user_id' => $toUserId]);
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
    public function batchNotify($type, User $fromUser, $users, Post $post, Reply $comment = null)
    {
        echo "<pre>";
        print_R($users);
        foreach ($users as $key => $value) {
            if ($fromUser->user_id == $key) {
//                 die('104');
//                 echo "<br>fromUser->user_id=".$fromUser->user_id."<br>";
//                 echo "<br>key=".$key."<br>";
//                 die('107');
                continue;
            }
//             die('107');
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