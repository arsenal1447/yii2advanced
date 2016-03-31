<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\AdUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>  

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'user_create')->textInput(['readonly'=>'true','disabled'=>'true','value'=>User::convertDate($model->user_create),'style' => 'width:255px;']) ?>
   
    <?= $form->field($model, 'user_logintime')->textInput(['readonly'=>'true','disabled'=>'true','value'=>User::convertDate($model->user_logintime),'style' => 'width:255px;']) ?>

    <?= $form->field($model, 'user_ip')->textInput(['readonly'=>'true','disabled'=>'true','style' => 'width:255px;']) ?>

    <?= $form->field($model, 'user_nickname')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'user_status')->textInput(['readonly'=>'true','disabled'=>'true','style'=>'width:255px;']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
