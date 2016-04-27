<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\AdAdmin;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Admin List');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad Admin'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'admin_name',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a($data->admin_name,['ad-admin/view','id'=>$data->id]);
                },
            ],
            'admin_passhash',
            'admin_role',
            'admin_email:email',
            [
                'attribute'=>'admin_create',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return AdAdmin::convertDate($data->admin_create);
                },
            ],
            // 'admin_logintime:datetime',
            // 'admin_ip',
            // 'admin_nickname',
            // 'admin_status',
            // 'admin_deld',
            // 'admin_authkey',
            // 'admin_password_reset_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
