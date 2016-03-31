<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdAuthAssignment */

$this->title = Yii::t('app', 'Create Ad Auth Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Auth Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-auth-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
