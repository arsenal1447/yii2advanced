<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ad Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-admin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
                'label'=>'admin_create',
                'value'=>$model->convertDate($model->admin_create),
            ],
            [
                'label'=>'admin_logintime',
                'value'=>$model->convertDate($model->admin_logintime),
            ],
            'admin_ip',
            'admin_nickname',
            'admin_status',
            'admin_deld',
            'admin_authkey',
            'admin_password_reset_token',
        ],
    ]) ?>

</div>
