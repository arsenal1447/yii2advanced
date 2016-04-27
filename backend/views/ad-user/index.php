<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User List');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'user_name',
//             'user_passhash',
            'user_email:email',           
//             'user_create',
            [
                'attribute'=>'user_create',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return User::convertDate($data->user_create);
                },
            ],
            // 'user_logintime:datetime',
            // 'user_ip',
            // 'user_nickname',
            // 'user_status',
            // 'user_deld',
            // 'user_authkey',
            // 'user_password_reset_token',
            [
                'attribute'=>'user_role',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return $data->user_role?$data->user_role:Html::a(Yii::t('app','Set Role'),['role','id'=>$data->user_id]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
