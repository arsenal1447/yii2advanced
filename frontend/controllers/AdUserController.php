<?php

namespace frontend\controllers;

use Yii;
use app\models\AdUser;
use yii\data\ActiveDataProvider;
use yii\web\ForbiddenHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdUserController implements the CRUD actions for AdUser model.
 */
class AdUserController extends Controller
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
     * Displays a single AdUser model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Updates an existing AdUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if ($id!=Yii::$app->user->id) {
            throw new ForbiddenHttpException(Yii::t('app', 'No Auth'));
        }
        $model = $this->findModel($id);

        $newpass= Yii::$app->request->post('AdUser')['user_password'];
        if(!empty($newpass)){
            $model->user_passhash = Yii::$app->security->generatePasswordHash($newpass);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        } else {
            return $this->render('update', ['model' => $model,]);
        }
    }


    /**
     * Finds the AdUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AdUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @desc 用户个人中心
     */
    public function actionInfo()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        
        $model = AdUser::find()->select(['user_id','user_name','user_create','user_status','user_email','user_logintime','user_ip','user_nickname'])
        ->where(['user_id'=> 1,'user_deld'=>0,'user_status'=>10])->one();
        
        if($model){
            return $this->render('info',['model' => $model,]);
        }else{
            throw new NotFoundHttpException('The requested user does not exist.');
        }

    }
}
