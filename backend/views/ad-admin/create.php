<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */

$this->title = Yii::t('app', 'Create Ad Admin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
