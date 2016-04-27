<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdAdmin */
/* @var $form ActiveForm */
?>
<div class="ad-admin-add">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'admin_name')->input('text',['style'=>'width:250px']); ?><!-- 设置input的长度 -->
        <?= $form->field($model, 'admin_passhash')->input('password',['style'=>'width:250px']); ?>
        <?= $form->field($model, 'admin_email')->input('email',['style'=>'width:250px']); ?>
        <?= $form->field($model, 'admin_role')->input('text',['style'=>'width:50px']); ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ad-admin-add -->
