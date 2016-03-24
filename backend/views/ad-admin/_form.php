<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_name')->textInput(['style'=>'width:250px']) ?>

    <?= $form->field($model, 'admin_passhash')->textInput(['style'=>'width:250px','disabled' => true]) ?>

    <?= $form->field($model, 'new_password')->input('password',['maxlength' => 250,'style'=>'width:250px']) ?>

    <?= $form->field($model, 'admin_email')->textInput(['style'=>'width:250px']) ?>

    <?= $form->field($model, 'admin_role')->textInput(['style'=>'width:100px']) ?>

    <?= $form->field($model, 'admin_status')->textInput(['style'=>'width:100px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
