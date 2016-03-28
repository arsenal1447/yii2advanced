<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

$this->title = $model->post_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->post_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->post_id], [
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
            'post_id',
            'post_title',
            'post_cateid',
            [
                'label'=>'post_user',
                'value'=>$model->getAuthName($model->post_user),
            ],
            'post_content:ntext',
            [
                'label'=>'post_create',
                'value'=>$model->convertDate($model->post_create),
            ],
            [
                'label'=>'post_update',
                'value'=>$model->convertDate($model->post_update),
            ],
            'post_viewcount',
            'post_status',
            'post_deld',
        ],
    ]) ?>

</div>