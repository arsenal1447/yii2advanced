<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Nav;

/* @var $this yii\web\View */
/* @var $model common\models\NavUrl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nav-url-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url_nav_id')->dropDownList(Nav::getNavList()) ?>

    <?= $form->field($model, 'url_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_order')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
