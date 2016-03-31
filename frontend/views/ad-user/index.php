<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ad Users');
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

            'id',
            'user_name',
            'user_passhash',
            'user_email:email',
            'user_create',
            // 'user_logintime:datetime',
            // 'user_ip',
            // 'user_nickname',
            // 'user_status',
            // 'user_deld',
            // 'user_authkey',
            // 'user_password_reset_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
