<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\AdAdmin;

/* @var $this yii\web\View */
/* @var $model app\models\AdCat */

$this->title = $model->cat_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Cats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-cat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->cat_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->cat_id], [
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
            'cat_id',
            'cat_name',
            'cat_parent',
            'cat_deld',
            'cat_status',
            [
                'label'=>'cat_create',
//                 'value'=>$model->getTime($model->cat_create),
                'value'=>AdAdmin::convertDate($model->cat_create),
            ],
            [
                'label'=>'cat_update',
//                 'value'=>$model->getTime($model->cat_update),
                'value'=>AdAdmin::convertDate($model->cat_update),
            ],
        ],
    ]) ?>

</div>
