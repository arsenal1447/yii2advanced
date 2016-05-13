<?php
namespace frontend\controllers;

use Yii;
use common\helpers\Arr;
use common\models\LoginForm;
use common\models\Post;
use common\models\Reply;
use common\models\Session;
use common\models\RightLink;
use common\models\User;
use common\models\AdPostTag;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use common\services\UserService;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
// use yii\web\Controller;
use common\components\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;
use dosamigos\qrcode\QrCode;
use yii\helpers\Json;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup', 'develop', 'help', 'captcha'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
//         return $this->render('index');
        $topics = Post::find()->limit(20)->where(['post_deld'=>0,'post_status'=>0,'post_type'=>Post::TYPE])->orderBy(['post_create' => SORT_DESC])->all();
        $users = UserService::findActiveUser(12);
        $headline = Arr::getColumn(RightLink::find()->where(['link_type' => RightLink::RIGHT_LINK_TYPE_HEADLINE])->all(), 'link_content');

        $statistics = [];
        $statistics['post_count'] = Post::find()->count();
        $statistics['reply_count'] = Reply::find()->count();
        $statistics['online_count'] = Session::find()->where(['>', 'expire', time()])->count();

        return $this->render('index', [
                'topics' => $topics,
                'users' => $users,
                'statistics' => $statistics,
                'headline' => Arr::arrayRandomAssoc($headline),
        ]);
    }

    public function actionUsers()
    {
        $model = UserService::findActiveUser(100);
        $count = User::find()->where(['user_status' => 10])->count();
        return $this->render('users', [
                'model' => $model,
                'count' => $count,
        ]);
    }


    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
            //登陆成功跳转到帖子首页
//             return $this->redirect('../ad-post/index', ['model' => $model,]);
        } else {
            return $this->render('login', ['model' => $model,]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        $this->performAjaxValidation($model);

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionQrcode($url = '')
    {
        return QrCode::png($url);
    }

    public function actionTimeline()
    {
        return $this->render('timeline');
    }

    public function actionTags()
    {
        $tags = AdPostTag::find()->orderBy('tag_update DESC')->all();

        return $this->render('tags', [
                'tags' => $tags,
        ]);
    }

    public function actionContributors()
    {
        return $this->render('contributors');
    }

    public function actionGetstart()
    {
        return $this->render('getstart');
    }

    /**
     * Performs ajax validation.
     * @param Model $model
     * @throws \yii\base\ExitException
     */
    protected function performAjaxValidation($model)
    {
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            echo json_encode(\yii\widgets\ActiveForm::validate($model));
            Yii::$app->end();
        }
    }
    
    public function actionAtUsers()
    {
        $model = UserService::findActiveUser(400);
        return Json::encode(Arr::getColumn($model, 'user_name'));
    }
    
    public function actionMarkdown()
    {
        return $this->render('markdown');
    }
    
}
