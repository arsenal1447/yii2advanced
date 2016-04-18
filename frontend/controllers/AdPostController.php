<?php

namespace frontend\controllers;

use Yii;
use app\models\AdPost;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\base\BaseFrontController;
use common\models\AdCat;
use base\Ad;
use common\models\Reply;
use common\helpers\TTimeHelper;

/**
 * AdPostController implements the CRUD actions for AdPost model.
 */
class AdPostController extends BaseFrontController
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
     * Lists all AdPost models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = AdPost::find();
        $query->where(['post_deld'=>0,'post_status'=>0]);//只显示未删除的帖子
        $dataProvider = new ActiveDataProvider([
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
        $postmodel = $this->findModel($id);
        if($postmodel->post_deld == 1){
            return $this->redirect(['index']);
        }
//         AdPost::UpViewCount($id);

//         return $this->render('view', [
//             'model' => $this->findModel($id),
//         ]);

        //帖子的回复情况
        $query = Reply::find()->where(['reply_post'=>$postmodel['post_id']]);

        $locals = Ad::getPagedRows($query,['order'=>'reply_create asc','pageSize'=>10]);

        $locals['currentBoard'] = $this->getBoard($postmodel['post_cateid']);
        $locals['post'] = $postmodel;
        $locals['newPost'] = new Reply;
        
        return $this->render('view',  [
                    'postmodel' => $postmodel,
                    'pages' => $locals['pages'],
                    'rows' => $locals['rows'],
                    'currentBoard' => $locals['currentBoard'],
                    'newPost' => $locals['newPost'],
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
        if (\Yii::$app->user->can('createPost')) {
             $model = new AdPost();
            //获取分类列表
            $catmodel = AdCat::getCate();

            if ($model->load(Yii::$app->request->post())) {

                if($model->save())
                {
                    $this->saveReplyForPost($model);
                }

                return $this->redirect(['view', 'id' => $model->post_id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'catmodel' => $catmodel,
                ]);
            }
        }

    }


    private function saveReplyForPost($post,$reply=null){
        $data = Ad::getPostValue('AdPost');

        if($reply==null)
        {
            $reply = new Reply;
            $reply->reply_post = $post['post_id'];
            $reply->reply_user = $post['post_user'];
            $reply->reply_user_name = $post['post_user_name'];
            $reply->reply_title = $post['post_title'];
            $reply->reply_content = $data['post_content'];
            $reply->reply_create = $post['post_create'];
            $reply->reply_update = $post['post_update'];
            $reply->reply_support = 0;
            $reply->reply_against = 0;
            $reply->reply_floor = 0;
//             $reply->note ='';
        }
        else
        {
            //$post->thread_id=$thread['id'];
            //$post->user_id=0;
            //$post->user_name='admin';
            $reply->reply_title = $post['post_title'];;
            $reply->reply_content = $data['post_content'];
            //$post->create_time=$thread['create_time'];
            $reply->reply_update = $post['post_update'];
            //$post->supports=0;
            //$post->againsts=0;
            //$post->floor=0;
            //$post->note='';
        }

        $reply->save(false);

    }
    
    
    public function actionNewReply()
    {
//         if(!YiiForum::checkAuth('reply_add'))
//         {
//             return $this->noPermission();
//         }
         
        Ad::checkIsGuest();
    
        $reply = new Reply;
         
        $postId = Ad::getGetValue('postid');
         
        $data = Ad::getPostValue('Reply');
        
        echo "<pre>";
        print_R($data);
        echo "</pre>";
//         die('177');
    
        if($data==null)
        {
            $post = Thread::findOne(['post_id' => $postId]);
    
            $locals=[];
            $locals['post'] = $post;
//             $locals['currentBoard']=$this->getBoard($post['board_id']);
            $locals['model'] = $reply;
            
            return $this->render('new-reply',$locals);
        }
         
//         $boardId = $data['board_id'];
        $postId = $data['post_id'];
        $postTitle = $data['post_title'];
    
         
        $reply->reply_post = $postId;
        $reply->reply_user = Ad::getIdentity()->id;
        $reply->reply_user_name = Ad::getIdentity()->user_name;
        $reply->reply_title = isset($data['post_title'])?$data['post_title']:'';
        $reply->reply_content = $data['reply_content'];
        $reply->reply_create = time();
        $reply->reply_update = time();
        $reply->reply_support = 0;
        $reply->reply_against = 0;
        $reply->reply_floor = 0;
//         $reply->note = '';
        if($reply->save())
        {
            AdPost::updateLastData($postId);
//             Board::updateLastData($boardId, $threadId, $threadTitle,false);
        }
    
        return $this->redirect(['view', 'id' => $postId]);
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
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }

        if (\Yii::$app->user->can('updatePost', ['post' => $post])) {
            $model = $this->findModel($id);
            $catmodel = AdCat::getCate();
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->post_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                    'catmodel' => $catmodel,
                ]);
            }
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
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
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

    /**
     * @desc 显示分类下的帖子
     * @return mixed
     */
    public function actionCat($cate_id)
    {
        $getparam = Yii::$app->request->get();
//         $get = Yii::$app()->request->getParam();;
        $cate_id = $getparam['cate_id'];
        $query = AdPost::find();
        $query->where(['post_deld'=>0,'post_status'=>0,'post_cateid'=>$cate_id]);//只显示未删除的帖子
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                ]);

        return $this->render('cat', [
                'dataProvider' => $dataProvider,
                ]);
    }





}
