<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PostMeta */

$this->title = $model->cat_name;
$this->params['breadcrumbs'][] = ['label' => 'Post Metas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-meta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cat_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cat_id], [
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
            'cat_id',
            'cat_name',
            'cat_parent',
            'cat_alias',
            'cat_type',
            'cat_desc',
            'cat_count',
            'cat_order',
            'cat_create',
            'cat_update',
        ],
    ]) ?>

</div>
