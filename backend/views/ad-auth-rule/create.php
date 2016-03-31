<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdAuthRule */

$this->title = Yii::t('app', 'Create Ad Auth Rule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Auth Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-auth-rule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
