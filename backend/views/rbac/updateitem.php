<?php
die('22');
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad Role',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Role'), 'url' => ['itemindex']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['itemview', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_itemform', [
        'model' => $model,
    ]) ?>

</div>
