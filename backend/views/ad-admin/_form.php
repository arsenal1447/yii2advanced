<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\AdAdmin;

/* @var $this yii\web\View */
/* @var $model backend\models\AdAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_name')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'admin_passhash')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'admin_role')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
