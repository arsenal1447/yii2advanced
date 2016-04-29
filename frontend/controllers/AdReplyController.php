<?php

namespace frontend\controllers;

use Yii;
use app\models\AdReply;
use yii\data\ActiveDataProvider;
// use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Topic;
use common\models\Reply;
use common\services\TopicService;
use common\components\Controller;
use frontend\models\UserMeta;
use common\services\NoticeService;

/**
 * AdReplyController implements the CRUD actions for AdReply model.
 */
class AdReplyController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AdReply models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AdReply::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AdReply model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * 创建评论
     * @param $id
     * @return PostComment|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $post = Topic::findTopic($id);
        $model = new Reply();
        if ($model->load(Yii::$app->request->post())) {
            $topService = new TopicService();
            if (!$topService->filterContent($model->reply_content)) {
                $this->flash('回复内容请勿回复无意义的内容，如你想收藏或赞等功能，请直接操作这篇帖子。', 'warning');
                return $this->redirect(['/ad-post/view', 'id' => $id]);
            }
            $model->reply_user_id = Yii::$app->user->id;
            $model->reply_user_name = Yii::$app->user->identity->user_name;
            $model->reply_post_id = $id;
            $model->reply_ip = Yii::$app->getRequest()->getUserIP();
            $model->reply_create = time();
            $rawComment = $model->reply_content;
            $model->reply_content = $model->replace($rawComment);
            if ($model->save(false)) {
//                 die('84');
                (new UserMeta())->saveNewMeta('topic', $id, 'follow');
                (new NoticeService())->newReplyNotify(Yii::$app->user->identity, $post, $model, $rawComment);
                // 更新回复时间
//                 $post->lastCommentToUpdate(Yii::$app->user->identity->username);
//                 // 评论计数器
//                 Topic::updateAllCounters(['comment_count' => 1], ['id' => $post->id]);
//                 // 更新个人总统计
//                 UserInfo::updateAllCounters(['comment_count' => 1], ['user_id' => $model->user_id]);

                $this->flash("评论成功", 'success');
            } else {
                $this->flash(array_values($model->getFirstErrors())[0], 'warning');
            }
            return $this->redirect(['/ad-post/view', 'id' => $post->post_id]);
        }
        return $model;
    }

//     /**
//      * Creates a new AdReply model.
//      * If creation is successful, the browser will be redirected to the 'view' page.
//      * @return mixed
//      */
//     public function actionCreate()
//     {
//         $model = new AdReply();

//         if ($model->load(Yii::$app->request->post()) && $model->save()) {
//             return $this->redirect(['view', 'id' => $model->reply_id]);
//         } else {
//             return $this->render('create', [
//                 'model' => $model,
//             ]);
//         }
//     }




    /**
     * Updates an existing AdReply model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->reply_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AdReply model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AdReply model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdReply the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdReply::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
