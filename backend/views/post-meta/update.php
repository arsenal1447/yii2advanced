<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PostMeta */

$this->title = 'Update Post Meta: ' . ' ' . $model->cat_name;
$this->params['breadcrumbs'][] = ['label' => 'Post Metas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cat_name, 'url' => ['view', 'id' => $model->cat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-meta-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
