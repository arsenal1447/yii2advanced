<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_passhash')->textInput(['maxlength' => true,'disabled' => true]) ?>

    <?= $form->field($model, 'new_password')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'admin_role')->textInput() ?>

    <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_create')->textInput() ?>

    <?= $form->field($model, 'admin_logintime')->textInput() ?>

    <?= $form->field($model, 'admin_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_status')->textInput() ?>

    <?= $form->field($model, 'admin_deld')->textInput() ?>

    <?= $form->field($model, 'admin_authkey')->textInput(['maxlength' => true,'disabled' => true]) ?>

    <?= $form->field($model, 'admin_password_reset_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
