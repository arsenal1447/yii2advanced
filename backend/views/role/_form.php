<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var common\models\AuthItem $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="auth-item-form">

    <?php 
	    $disabled = null;
	    if(!$model->isNewRecord)
	    {
	    	$disabled = 'disabled';
	    }
	    
    	$form = ActiveForm::begin(); 
    ?>

    <?= $form->field($model, 'group')->dropDownList(ArrayHelper::map($groups, 'name', 'description'),['disabled'=>$disabled,'style'=>'width:255px']) ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => 64,'disabled'=>$disabled,'style'=>'width:255px']) ?>
    
    <?= $form->field($model, 'description')->textarea(['rows' => 6,'style'=>'width:255px']) ?>

    <?= $form->field($model, 'data')->textarea(['rows' => 6,'style'=>'width:255px']) ?>

    <?= $form->field($model, 'rule_name')->textInput(['maxlength' => 64,'style'=>'width:255px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
