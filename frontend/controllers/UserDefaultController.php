<?php

namespace frontend\controllers;

use frontend\models\AdPost;
use frontend\models\UserMeta;
use common\components\Controller;
use common\models\User;
use common\models\UserInfo;
use common\models\Reply;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yiier\merit\models\MeritLog;
use yiier\merit\models\MeritTemplate;

class UserDefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->redirect(['show', 'user_name' => \Yii::$app->user->identity->user_name]);
    }

    /**
     * Shows user's profile.
     * @param  string $username
     * @return \yii\web\Response
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionShow($username = '')
    {
        $user = $this->user($username);
        // 个人主页浏览次数
        $currentUserId = \Yii::$app->getUser()->getId();
        if (null != $currentUserId
            && $user->user_id != $currentUserId
        ) {
            UserInfo::updateAllCounters(['info_view_count' => 1], ['user_id' => $user->user_id]);
        }

        return $this->render('show', [
            'user' => $user,
            'dataProvider' => $this->comment($user->user_id),
        ]);
    }

    protected function comment($userId)
    {
        return new ActiveDataProvider([
            'query' => Reply::find()->where(['reply_user_id' => $userId, 'reply_status' => 1])->orderBy(['reply_create' => SORT_DESC]),
        ]);
    }

    /**
     * 最近主题
     * @param string $username
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionPost($username = '')
    {
        $user = $this->user($username);

        $dataProvider = new ActiveDataProvider([
            'query' => AdPost::find()
                ->where(['post_user_id' => $user->user_id, 'post_type' => AdPost::TYPE])
                ->andWhere('post_status > :status ', [':status' => AdPost::STATUS_DELETED])
                ->orderBy(['post_create' => SORT_DESC]),
        ]);

        return $this->render('show', [
            'user' => $user,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 最新收藏
     * @param string $username
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionFavorite($username = '')
    {
        $user = $this->user($username);

        $dataProvider = new ActiveDataProvider([
            'query' => UserMeta::find()->where([
                'meta_user_id' => $user->user_id,
                'meta_type' => 'favorite',
                'meta_target_type' => 'topic',
            ])->orderBy(['created_at' => SORT_DESC])
        ]);

        return $this->render('show', [
            'user' => $user,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPoint($username = '')
    {
        $user = $this->user($username);

        $dataProvider = new ActiveDataProvider([
            'query' => MeritLog::find()->where([
                'user_id' => $user->user_id,
                'type' => 1,
            ])->orderBy(['created_at' => SORT_DESC])
        ]);

        return $this->render('show', [
            'user' => $user,
            'dataProvider' => $dataProvider,
        ]);
    }

    protected function user($username = '')
    {
        $user = User::findOne(['user_name' => $username]);

        if ($user === null) {
            throw new NotFoundHttpException;
        }
        return $user;
    }
}
