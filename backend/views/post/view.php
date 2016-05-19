<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\Models\Post */

$this->title = $model->post_title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->post_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->post_id], [
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
            'post_id',
            'post_meta_id',
            'post_user_id',
            'post_title',
            'post_author',
            'post_excerpt',
            'post_image',
            'post_content:ntext',
            'post_tags',
            'post_view_count',
            'post_reply_count',
            'post_favorite_count',
            'post_like_count',
            'post_hate_count',
            'post_status',
            'post_order',
            'post_create',
            'post_update',
        ],
    ]) ?>

</div>
