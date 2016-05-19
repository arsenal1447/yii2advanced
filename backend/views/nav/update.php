<?php


/* @var $this yii\web\View */
/* @var $model common\models\Nav */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Nav',
]) . ' ' . $model->nav_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Navs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nav_name, 'url' => ['view', 'id' => $model->nav_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="nav-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
