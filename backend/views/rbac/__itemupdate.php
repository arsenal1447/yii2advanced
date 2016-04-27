<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad Post',
]) . ' ' . $model->post_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['view', 'id' => $model->post_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cate' => $catmodel,
    ]) ?>

</div>
