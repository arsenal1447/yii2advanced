<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Admin List');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-auth-assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ad Admin'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',    
//             'admin_name',
            [
                'attribute'=>'Name',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a($data->admin_name,['ad-admin/view','id'=>$data->id]);
                },
            ],
            [
                'attribute'=>'admin_role',
                'format'=>'html',
                'value' => function ($data,$url) {
                    return Html::a($data->admin_role,['ad-admin/view','role_id'=>$data->admin_role]);
                },
            ],
            'admin_email',
            'admin_create',
            'admin_logintime',
            'admin_ip',
            'admin_nickname',
            'admin_deld',
            'admin_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
