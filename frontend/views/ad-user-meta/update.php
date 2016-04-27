<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdUserMeta */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad User Meta',
]) . ' ' . $model->meta_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad User Metas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->meta_id, 'url' => ['view', 'id' => $model->meta_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-user-meta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
