<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdReply */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-reply-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reply_id')->textInput() ?>

    <?= $form->field($model, 'reply_post')->textInput() ?>

    <?= $form->field($model, 'reply_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reply_create')->textInput() ?>

    <?= $form->field($model, 'reply_user')->textInput() ?>

    <?= $form->field($model, 'reply_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reply_user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reply_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reply_update')->textInput() ?>

    <?= $form->field($model, 'reply_support')->textInput() ?>

    <?= $form->field($model, 'reply_against')->textInput() ?>

    <?= $form->field($model, 'reply_floor')->textInput() ?>

    <?= $form->field($model, 'reply_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reply_deld')->textInput() ?>

    <?= $form->field($model, 'reply_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
