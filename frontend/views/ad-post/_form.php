<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_title')->textInput(['style'=>'width:550px']) ?>

    <?= $form->field($model, 'post_content')->textarea(['rows' => 6,'style'=>'width:550px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
