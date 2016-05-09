<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_meta_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_user_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'post_author')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'post_excerpt')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'post_image')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'post_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_tags')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'post_view_count')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_reply_count')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_favorite_count')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_like_count')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_hate_count')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_status')->textInput() ?>

    <?= $form->field($model, 'post_order')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_create')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'post_update')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
