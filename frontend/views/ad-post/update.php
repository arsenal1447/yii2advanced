<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

$this->title = 'Update Ad Post: ' . ' ' . $model->post_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['view', 'id' => $model->post_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ad-post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
