<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<div class="media">
    <div class="media-body">
        <div class="media-heading">
            <?= Html::a(Html::encode($model->post_title),
                ['/ad-post/view', 'id' => $model->post__id], ['title' => $model->post_title]
            ); ?> <span class="title-info"><?= \common\helpers\Formatter::relative($model->post_update)?></span>
        </div>
    </div>
</div>
