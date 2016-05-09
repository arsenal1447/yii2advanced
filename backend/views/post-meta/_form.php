<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PostMeta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-meta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cat_parent')->dropDownList(['' => '根目录'] + $model->getParents()) ?>

	<?= $form->field($model, 'cat_alias')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'cat_type')->dropDownList($model->types) ?>

    <?= $form->field($model, 'cat_desc')->textarea(['row' => 6]) ?>

    <?= $form->field($model, 'cat_order')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
