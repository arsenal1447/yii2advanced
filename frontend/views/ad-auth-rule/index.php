<?php
// /* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
// use yii\captcha\Captcha;


$this->title = '权限';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-AdAuthRule">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'AdAuthRule-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'data') ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'AdAuthRule-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
