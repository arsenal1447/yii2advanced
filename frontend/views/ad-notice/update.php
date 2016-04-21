<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdNotice */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad Notice',
]) . ' ' . $model->notice_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Notices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notice_id, 'url' => ['view', 'id' => $model->notice_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-notice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
