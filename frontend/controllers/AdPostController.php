<?php

namespace frontend\controllers;

use Yii;
use app\models\AdPost;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdPostController implements the CRUD actions for AdPost model.
 */
class AdPostController extends Controller
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
//             'upload' => [
//                 'class' => 'public\ueditor\UEditorAction',
//                 'config' => [
//                     "imageUrlPrefix"  => "http://www.ad.com",//图片访问路径前缀
//                     "imagePathFormat" => "/uploads/image/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
//                 ],
//             ]
        ];
    }

    /**
     * Lists all AdPost models.
     * @return mixed
     */
    public function actionIndex()
    {   
        $query = AdPost::find();
        $query->where(['post_deld'=>0]);//只显示未删除的帖子
        $dataProvider = new ActiveDataProvider([
//             'query' => AdPost::find(),
            'query' => $query,
        ]);
                
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AdPost model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if($model->post_deld==1){
//             echo ('该帖子已经被删除');
            return $this->redirect(['index']);
        }
        
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AdPost model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {   
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        $model = new AdPost();
        //获取分类列表
        $catmodel = $model->getCate();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->post_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'catmodel' => $catmodel,
            ]);
        }
    }

    /**
     * Updates an existing AdPost model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {   
        //需要添加权限判断,判断是否是发表帖子的用户,发布者才可以编辑
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->post_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AdPost model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {    
        //需要添加权限判断,判断是否是发表帖子的用户,发布者才可以编辑
        $model = $this->findModel($id);
        $model->post_deld = 1;
        if($model->save()){
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the AdPost model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AdPost the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdPost::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
//     /**
//      * @desc 获取帖子的分类
//      * @return boject 
//      */
//     public function getCate(){
//         $command = \Yii::$app->db->createCommand("select cat_id,cat_name from ad_cat where cat_deld=0 and cat_status=0");
//         $catmodel = $command->queryAll();
//         $catarr = [];
//         foreach ($catmodel as $key=>$val){
//             $catarr[$val['cat_id']] = $val['cat_name'];
//         }
        
//         return $catarr;
//     }
    
    
    
}
