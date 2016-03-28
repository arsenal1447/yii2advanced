<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdCat */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad Cat',
]) . ' ' . $model->cat_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Cats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cat_id, 'url' => ['view', 'id' => $model->cat_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-cat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
