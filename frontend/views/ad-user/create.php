<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdUser */

$this->title = Yii::t('app', 'Create Ad User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
