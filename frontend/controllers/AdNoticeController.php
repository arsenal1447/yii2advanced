<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use common\services\UserService;
use frontend\models\AdNotice;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdNoticeController implements the CRUD actions for AdNotice model.
 */
class AdNoticeController extends Controller
{

    public $sorts = [
            'newest' => '最新的',
            'excellent' => '优质主题',
            'hotest' => '热门的',
            'uncommented' => '未回答的'
    ];
    
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
     * Lists all AdNotice models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        
//         $userid = Yii::$app->user->id;
//         die($userid);
//         $query =  AdNotice::find()
//         ->select(['notice_id','notice_from_user_id','notice_user_id','notice_post_id','notice_comment_id'])
//         ->where(['notice_status'=>1,'notice_user_id'=>$userid]);
        
        $query =  AdNotice::find()->where(['notice_status'=>AdNotice::Notice_Show,'notice_deld'=>AdNotice::Notice_Normal,'notice_user_id'=>Yii::$app->user->id]);
        
        $notifyCount = UserService::findNotifyCount();
        
//         UserService::clearNotifyCount();
        
        $dataProvider = new ActiveDataProvider([
            'query' =>$query,
            'sort' => ['defaultOrder' => [
                'notice_create' => SORT_DESC,
                'notice_id' => SORT_ASC,
            ]]
        ]);
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'notifyCount' => $notifyCount,
        ]);
    }

    /**
     * Displays a single AdNotice model.
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
     * 返回通知条数
     * @return mixed
     */
    public function actionCount()
    {
        $model = User::findOne(Yii::$app->user->id);
        return $model->user_notice_count;
    }
    
    /**
     * 清空通知
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Exception
     */
    public function actionClear()
    {
//         AdNotice::deleteAll(['notice_user_id' => Yii::$app->user->id]);
        $userid = Yii::$app->user->id;
        AdNotice::updateAll(['notice_deld'=>AdNotice::Notice_Deld,'notice_update'=>time()]," notice_user_id = $userid");
    
        return $this->redirect(['index']);
    }

    /**
     * Creates a new AdNotice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AdNotice();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->notice_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AdNotice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->notice_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AdNotice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
//         $this->findModel($id)->delete();
//         $this->findModel($id)->update();
        
        $model = $this->findModel($id);
        
        $model->notice_deld = AdNotice::Notice_Deld;
        $model->notice_update = time();
        $model->update();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AdNotice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdNotice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdNotice::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
