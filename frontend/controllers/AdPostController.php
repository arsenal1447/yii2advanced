<?php

namespace frontend\controllers;

use Yii;
use common\models\AdPost;
use common\services\NoticeService;
use common\services\TopicService;
use frontend\models\AdNotice;
use frontend\models\Topic;
use frontend\models\UserMeta;
use yii\data\ActiveDataProvider;
// use yii\web\Controller;
use common\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\base\BaseFrontController;
use common\models\AdCat;
use base\Ad;
use common\models\Reply;
use common\helpers\TTimeHelper;
use common\models\UserInfo;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

/**
 * AdPostController implements the CRUD actions for AdPost model.
 */
class AdPostController extends Controller
// class AdPostController extends BaseFrontController
{
    const PAGE_SIZE = 50;
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
     * Lists all AdPost models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = AdPost::find();
        $query->where(['post_deld'=>0,'post_status'=>0,'post_type'=>AdPost::TYPE])->orderBy('post_create DESC');//只显示未删除的帖子
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'sorts' => $this->sorts,
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
        if($model->post_deld == 1){
            return $this->redirect(['index']);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Reply::findCommentList($id),
            'pagination' => [
                'pageSize' => self::PAGE_SIZE,
            ],
            'sort' => ['defaultOrder' => ['reply_create' => SORT_ASC]]
        ]);

        AdPost::UpViewCount($id);
        //帖子的回复情况
//         $query = Reply::find()->where(['reply_post_id'=>$model['post_id']]);

//         $locals = Ad::getPagedRows($query,['order'=>'reply_create asc','pageSize'=>10]);

//         $locals['currentBoard'] = $this->getBoard($model['post_cate_id']);
//         $locals['post'] = $model;
//         $locals['newPost'] = new Reply;

        $user = Yii::$app->user->identity;
        $admin = ($user && ($user->isAdmin($user->user_name) || $user->isSuperAdmin($user->user_name))) ? true : false;

        return $this->render('view',  [
            'model' => $model,
            'dataProvider' => $dataProvider,
//             'pages' => $locals['pages'],
//             'rows' => $locals['rows'],
//             'currentBoard' => $locals['currentBoard'],
//             'newPost' => $locals['newPost'],
            'comment' => new Reply(),
            'admin' => $admin,
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
//         if (\Yii::$app->user->can('createPost')) {
             $model = new AdPost();
            //获取分类列表
            $catmodel = AdCat::getCate();
            if ($model->load(Yii::$app->request->post())) {
//                 echo "<pre>";print_R(Yii::$app->request->post());die('131');
                $model->post_cate_id = Yii::$app->request->post('AdPost')['post_cate_id'];
                if($model->save(false)){
                    $this->saveReplyForPost($model);

                    (new UserMeta)->saveNewMeta('topic', $model->post_id, 'follow');
                    (new NoticeService())->newPostNotify(Yii::$app->user->identity, $model, $model->post_content);
                    // 更新个人总统计
//                     UserInfo::updateAllCounters(['post_count' => 1], ['user_id' => $model->user_id]);
//                     $this->flash('发表文章成功!', 'success');
                     //die('116');
//                      var_dump($model->post_id);
//                      die('116');
                     return $this->redirect(['view', 'id' => $model->post_id]);
                }
//                 return $this->redirect(['view', 'id' => $model->post_id]);
                //return $this->redirect('view',['id' => $model->post_id,'catmodel' => $catmodel]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'catmodel' => $catmodel,
                ]);
            }
//         }

    }


    private function saveReplyForPost($post,$reply=null){
        $data = Ad::getPostValue('AdPost');

        if($reply==null)
        {
            $reply = new Reply;
            $reply->reply_post_id = $post['post_id'];
            $reply->reply_user_id = $post['post_user_id'];
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

        $model = new Reply;
//         $data = array();

        $postId = Yii::$app->request->get('id');
        $post = Topic::findTopic($postId);
        $data = Ad::getPostValue('Reply');
        if($data == null){
            $post = AdPost::findOne(['post_id' => $postId]);

            $locals=[];
            $locals['post'] = $post;
//             $locals['currentBoard']=$this->getBoard($post['board_id']);
            $locals['model'] = $model;

            return $this->render('new-reply',$locals);
        }

        $postId = $data['post_id'];
        $postTitle = $data['post_title'];
//         yii::myPrint($data);
        if ($model->load(Yii::$app->request->post())) {
            $model->reply_post_id = $postId;
//             $model->reply_user_id = Ad::getIdentity()->id;
            $model->reply_user_id = Yii::$app->user->id;
            $model->reply_user_name = Yii::$app->user->getIdentity()->user_name;
            $model->reply_title = isset($data['post_title'])?$data['post_title']:'';
            $model->reply_content = $data['reply_content'];
//             $model->reply_content = $model->replace($data['reply_content']);
            $rawComment = $model->reply_content;
            $model->reply_create = time();
            $model->reply_update = time();
            if($model->save())
            {
                AdPost::updateLastData($postId);
                $userMeta = new UserMeta();
                $userMeta->saveNewMeta('topic', $postId, 'follow');
//                 die('205');
                $noticeservice = new NoticeService();
                $noticeservice->newReplyNotify(Yii::$app->user->identity, $post, $model, $rawComment);
            }
        }

//         return $model;

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

//         if (\Yii::$app->user->can('updatePost', ['post' => $post])) {
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
//         }
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
        $query->where(['post_deld'=>0,'post_status'=>0,'post_cate_id'=>$cate_id]);//只显示未删除的帖子
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                ]);

        return $this->render('cat', [
                'dataProvider' => $dataProvider,
                ]);
    }





}
