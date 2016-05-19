<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\NavUrl */

$this->title = $model->url_title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nav Urls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-url-view">

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->url_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->url_id], [
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
            'url_id',
            'url_nav_id',
            'url_title',
            'url_url:url',
            'url_description',
            'url_order',
            'url_user_id',
            'url_create',
            'url_update',
        ],
    ]) ?>

</div>
