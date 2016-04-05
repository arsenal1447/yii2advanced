<?php

namespace backend\controllers;

use Yii;
use app\models\AdUser;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;

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
     * Lists all AdUser models.
     * @return mixed
     */
    public function actionIndex()
    {    
        if(Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        $query = AdUser::find()->select(['id','user_name','user_email','user_create'])->where(['user_deld'=>0]) ;
        
        $dataProvider = new ActiveDataProvider([
//             'query' => AdUser::find(),
            'query' => $query,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AdUser model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {    
        if(Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AdUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {    
        if(Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        $model = new AdUser();

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AdUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {    
        if(Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AdUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {    
        if(Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        $model = $this->findModel($id);
        $model->user_deld = 1;
        
        if($model->save()){
            return $this->redirect(['index']);
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
}
