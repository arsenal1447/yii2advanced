<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdNotice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-notice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'notice_from_user_id')->textInput() ?>

    <?= $form->field($model, 'notice_user_id')->textInput() ?>

    <?= $form->field($model, 'notice_post_id')->textInput() ?>

    <?= $form->field($model, 'notice_comment_id')->textInput() ?>

    <?= $form->field($model, 'notice_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notice_data')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notice_status')->textInput() ?>

    <?= $form->field($model, 'notice_create')->textInput() ?>

    <?= $form->field($model, 'notice_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
