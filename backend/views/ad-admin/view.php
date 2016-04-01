<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\AdAdmin;

/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-admin-view">

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
            'admin_name',
            'admin_passhash',
            'admin_role',
            'admin_email:email',
            [
                'attribute'=>'admin_create',
                'format'=>'html',
                'value'=>AdAdmin::convertDate($model->admin_create),
            ],
//             'admin_logintime:datetime',
            [
                'attribute'=>'admin_logintime',
                'format'=>'html',
                'value'=>AdAdmin::convertDate($model->admin_logintime),
            ],
            'admin_ip',
            'admin_nickname',
            'admin_status',
//             'admin_deld',
            [
                'attribute'=>'admin_deld',
                'format'=>'html',
                'value'=>AdAdmin::getDelstatus($model->admin_deld),
            ],
//             'admin_authkey',
//             'admin_password_reset_token',
        ],
    ]) ?>

</div>
