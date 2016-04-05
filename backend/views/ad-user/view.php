<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\AdUser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_name',
//             'user_passhash',
            'user_email:email',
//             'user_create',
            [
                'attribute'=>'user_create',
                'format'=>'html',
                'value' => User::convertDate($model->user_create),
            ],
            [
                'attribute'=>'user_logintime',
                'format'=>'html',
                'value' => User::convertDate($model->user_logintime),
            ],
            'user_ip',
            'user_nickname',
            'user_status',
            [
                'attribute'=>'user_deld',
                'format'=>'html',
                'value' => User::getDelstatus($model->user_deld),
            ],
//             'user_authkey',
//             'user_password_reset_token',
        ],
    ]) ?>

</div>
