<?php

namespace frontend\controllers;

use Yii;
use common\models\Post;
use common\models\User;
use common\services\NoticeService;
use common\services\TopicService;
use frontend\models\AdNotice;
use frontend\models\Topic;
use frontend\models\UserMeta;
use frontend\models\AdPost;
use yii\data\ActiveDataProvider;
use common\models\PostSearch;
use common\models\PostMeta;
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
        return ArrayHelper::merge(parent::behaviors(), [
                'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                                'delete' => ['post'],
                        ],
                ],
                'access' => [
                        'class' => AccessControl::className(),
                        'rules' => [
                                // 默认只能Get方式访问
                                ['allow' => true, 'actions' => ['view', 'index', 'search'], 'verbs' => ['GET']],
                                // 登录用户才能提交评论或其他内容
                                ['allow' => true, 'actions' => ['api', 'view', 'delete'], 'verbs' => ['POST'], 'roles' => ['@']],
                                // 登录用户才能使用API操作(赞,踩,收藏)
                                ['allow' => true, 'actions' => ['create', 'update', 'revoke', 'excellent'], 'roles' => ['@']],
                        ]
                ],
        ]);
    }
    

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();

        // 话题或者分类筛选
        $params = Yii::$app->request->queryParams;
        empty($params['tag']) ?: $params['PostSearch']['tags'] = $params['tag'];
        if (isset($params['node'])) {
            $postMeta = PostMeta::findOne(['cat_alias' => $params['node']]);
//             ($postMeta) ? $params['PostSearch']['post_meta_id'] = $postMeta->cat_id : '';
            ($postMeta) ? $params['PostSearch']['post_cate_id'] = $postMeta->cat_id : '';
        }
//         pr($params);
        $dataProvider = $searchModel->search($params);
        $dataProvider->query->andWhere([Post::tableName() . '.post_type' => 'topic', 'post_deld'=>Post::STATUS_DELETED,'post_status' => [Post::STATUS_ACTIVE, Post::STATUS_EXCELLENT]]);
        // 排序
        $sort = $dataProvider->getSort();
        $sort->attributes = array_merge($sort->attributes, [
            'hotest' => [
                'asc' => [
                    'post_view_count' => SORT_DESC,
                    'post_create' => SORT_DESC
                ],
            ],
            'excellent' => [
                'asc' => [
                    'post_status' => SORT_DESC,
                    'post_view_count' => SORT_DESC,
                    'post_create' => SORT_DESC
                ],
            ],
            'uncommented' => [
                'asc' => [
                    'post_view_count' => SORT_ASC,
                    'post_create' => SORT_DESC
                ],
            ]
        ]);

        return $this->render('index', [
                'searchModel' => $searchModel,
                'sorts' => $this->sorts,
                'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if($model->post_deld == 1){
            $this->flash('此贴已经被删除', 'error');
            return $this->redirect(['index']);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Reply::findCommentList($id),
            'pagination' => [
                'pageSize' => self::PAGE_SIZE,
            ],
            'sort' => ['defaultOrder' => ['reply_create' => SORT_ASC]]
        ]);

        Post::UpViewCount($id);
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
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        
        $model = new AdPost();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $topService = new TopicService();
            if (!$topService->filterContent($model->post_title) || !$topService->filterContent($model->post_content)) {
                $this->flash('请勿发表无意义的内容', 'warning');
                return $this->redirect('create');
            }
            $model->post_create = time();
            $model->post_update = time();
            if ($model->save()) {
                (new UserMeta)->saveNewMeta('topic', $model->post_id, 'follow');
                (new NoticeService())->newPostNotify(Yii::$app->user->identity, $model, $model->post_content);
                // 更新个人总统计
                UserInfo::updateAllCounters(['info_post_count' => 1], ['info_user_id' => $model->post_user_id]);
                $this->flash('发表文章成功!', 'success');
                return $this->redirect(['view', 'id' => $model->post_id]);
            }
        } else {
            return $this->render('create', ['model' => $model,]);
        }
    }


    private function saveReplyForPost($post,$reply=null){
        $data = Ad::getPostValue('Post');

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
            $post = Post::findOne(['post_id' => $postId]);

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
                Post::updateLastData($postId);
                $userMeta = new UserMeta();
                $userMeta->saveNewMeta('topic', $postId, 'follow');
                $noticeservice = new NoticeService();
                $noticeservice->newReplyNotify(Yii::$app->user->identity, $post, $model, $rawComment);
            }
        }

//         return $model;

        return $this->redirect(['view', 'id' => $postId]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = AdPost::findTopic($id);
        
        if (!($model && (User::getThrones() || $model->isCurrent()))) {
            throw new NotFoundHttpException;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                $this->flash('发表更新成功!', 'success');
                return $this->redirect(['view', 'id' => $model->post_id]);
            }
        } else {
            return $this->render('update', [
                    'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        //需要添加权限判断,判断是否是发表帖子的用户,发布者才可以编辑     --待完成
        $model = $this->findModel($id);
        if($model->post_user_id!= Yii::$app->user->id){
            return $this->redirect(['index']);
        }
        $model->post_deld = 1;
        if($model->save()){
            //同时把ad_reply回复表的数据也变成被删除状态
            $replymodel = Reply::find()->select(['reply_id'])->where(['reply_post_id'=>$id,'reply_deld'=>Reply::STATUS_DELETED])->asArray()->all();

            if($replymodel){
                Reply::updateAll(['reply_deld' => Reply::STATUS_BEDELD], 'reply_post_id=:id',['id'=>$id]);
            }
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
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
        $query = Post::find();
        $query->where(['post_deld'=>0,'post_status'=>0,'post_cate_id'=>$cate_id]);//只显示未删除的帖子
        $dataProvider = new ActiveDataProvider(['query' => $query,]);

        return $this->render('cat', ['dataProvider' => $dataProvider,]);
    }





}
