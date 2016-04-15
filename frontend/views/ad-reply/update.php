<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdReply */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad Reply',
]) . ' ' . $model->reply_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Replies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reply_id, 'url' => ['view', 'id' => $model->reply_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-reply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
