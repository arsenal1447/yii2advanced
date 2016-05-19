<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NavUrl */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Nav Url',
]) . ' ' . $model->url_title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nav Urls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->url_title, 'url' => ['view', 'id' => $model->url_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="nav-url-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
