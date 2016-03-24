<?php


use yii\helpers\Html;
use frontend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);


/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */

$this->title = 'Create Ad Admin';
$this->params['breadcrumbs'][] = ['label' => 'Ad Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
