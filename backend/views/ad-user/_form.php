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

    <?= $form->field($model, 'user_password')->passwordInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?php //echo  $form->field($model, 'user_create')->textInput(['style'=>'width:255px;','disabled'=>'true','value'=>User::convertDate($model->user_create)]) ?>

    <?php //echo$form->field($model, 'user_logintime')->textInput(['style'=>'width:255px;','disabled'=>'true','value'=>User::convertDate($model->user_create)]) ?>

    <?php //echo$form->field($model, 'user_ip')->textInput(['maxlength' => true,'style'=>'width:255px;','disabled'=>'true',]) ?>

    <?= $form->field($model, 'user_nickname')->textInput(['maxlength' => true,'style'=>'width:255px;']) ?>

    <?= $form->field($model, 'user_status')->textInput(['style'=>'width:255px;']) ?>

    <?= $form->field($model, 'user_deld')->dropDownList(['0' => '正常','1' => '已删除'],['style'=>'width:255px;']) ?>

    <?= $form->field($model, 'user_role')->textInput(['style'=>'width:255px;']) ?>

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
