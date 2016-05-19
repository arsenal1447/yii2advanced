<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\Post */

$this->title = 'Update Post: ' . ' ' . $model->post_title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_title, 'url' => ['view', 'id' => $model->post_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
