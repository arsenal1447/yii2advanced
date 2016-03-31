<?php

namespace frontend\controllers;

// use common\models\Coupon;
// use common\models\Order;
// use common\models\PointLog;
// use common\models\Product;
// use common\models\Profile;
// use frontend\models\ChangePasswordForm;
use Yii;
use yii\web\Controller;
use common\models\User;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Response;

class UserController extends Controller
{
//     public $layout = 'column2';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
        ];
    }

    public function actionIndex()
    {
        $getparam = Yii::$app->request->get();
        $userid = $getparam['user_id'];

        $model = User::find()->select(['id','user_name','user_create','user_status','user_email','user_logintime'])
        ->where(['id'=>$userid,'user_deld'=>0,'user_status'=>10])->one();

        return $this->render('index', [
                'model' => $model,
                ]);

    }


    public function actionInfo()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }

        $model = User::find()->select(['id','user_name','user_create','user_status','user_email','user_logintime'])
        ->where(['id'=> Yii::$app->user->id,'user_deld'=>0,'user_status'=>10])->one();

        return $this->render('info', [
                'model' => $model,
                ]);

    }

    public function actionFavorite()
    {
        $productIds = ArrayHelper::map(Favorite::find()->where(['user_id' => Yii::$app->user->id])->orderBy(['id' => SORT_DESC])->asArray()->all(), 'product_id', 'product_id');
        if (count($productIds)) {
            $query = Product::find()->where(['id' => $productIds]);
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => ['defaultPageSize' => Yii::$app->params['defaultPageSizeOrder']],
                'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]],
            ]);

            return $this->render('favorite', [
                'products' => $dataProvider->getModels(),
                'pagination' => $dataProvider->pagination,
            ]);
        }

        return $this->render('favorite', [
            'products' => [],
        ]);
    }

    public function actionChangePassword()
    {
        try {
            $model = new ChangePasswordForm();
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->changePassword()) {
            Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New password was saved.'));
            return $this->redirect(['change-password']);
        }

        return $this->render('changePassword', [
            'model' => $model,
        ]);
    }

    public function actionPointLog()
    {
        $query = PointLog::find()->where(['user_id' => Yii::$app->user->id]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['defaultPageSize' => Yii::$app->params['defaultPageSizeOrder']],
            'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]],
        ]);

        return $this->render('point-log', [
            'models' => $dataProvider->getModels(),
            'pagination' => $dataProvider->pagination,
        ]);
    }

    public function actionCoupon($type = 1)
    {
        $now = time();
        if ($type == 1) {
            $query = Coupon::find()->where(['and', 'user_id = ' . Yii::$app->user->id, 'used_at = 0', 'ended_at >= ' . $now]);
        } elseif ($type == 2) {
            $query = Coupon::find()->where(['and', 'user_id = ' . Yii::$app->user->id, 'used_at > 0']);
        } elseif ($type == 3) {
            $query = Coupon::find()->where(['and', 'user_id = ' . Yii::$app->user->id, 'ended_at < ' . $now]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['defaultPageSize' => Yii::$app->params['defaultPageSizeOrder']],
            'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]],
        ]);

        return $this->render('coupon', [
            'models' => $dataProvider->getModels(),
            'pagination' => $dataProvider->pagination,
        ]);
    }

    public function actionProfile()
    {
        $model = Profile::findOne(['user_id' => Yii::$app->user->id]);
        if (!$model) {
            $model = new Profile();
            $model->user_id = Yii::$app->user->id;
        }

        if ($model->birthday) {
            $model->year = substr($model->birthday, 0, 4);
            $model->month = substr($model->birthday, 5, 2);
            $model->day = substr($model->birthday, 8, 2);
        }

        if ($model->load(Yii::$app->request->post())) {
            $model->year = intval(Yii::$app->request->post()['Profile']['year']);
            $model->month = intval(Yii::$app->request->post()['Profile']['month']);
            $model->day = intval(Yii::$app->request->post()['Profile']['day']);
            if ($model->year || $model->month || $model->day) {
                $model->birthday = date('Y-m-d H:i:s', mktime(0, 0, 0, $model->month, $model->day, $model->year));
            }

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New profile was saved.'));
            }
        }

        return $this->render('profile', [
            'model' => $model,
        ]);
    }

    public function actionAjaxDeleteFavorite($id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if ($id) {
            Favorite::deleteAll(['user_id' => Yii::$app->user->id, 'product_id' => $id]);
            return [
                'status' => 1,
            ];
        }
        return [
            'status' => -1,
        ];
    }

}
