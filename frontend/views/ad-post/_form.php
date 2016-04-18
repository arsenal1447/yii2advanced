<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//引入百度编辑器
$this->registerJsFile('@web/public/ueditor/ueditor.config.js');//注册自定义js
$this->registerJsFile('@web/public/ueditor/ueditor.all.min.js');
$this->registerJsFile('@web/public/ueditor/lang/zh-cn/zh-cn.js');

echo Html::jsFile('@web/public/jquery-1.10.2.js');
/* @var $this yii\web\View */
/* @var $model app\models\AdPost */
/* @var $form yii\widgets\ActiveForm */
?>
<script>
 $(function(){
 	var ue = UE.getEditor('editor');
 })
</script>
<style>
    .inline .radio,.inline .checkbox{display: inline-block;margin: 0 5px;}
    #editor{margin-top: 20px;padding:0;margin:20px 0;width:100%;height:auto;border: none;}
</style>

<div class="ad-post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_title')->textInput(['style'=>'width:550px']) ?>
    
    <?= $form->field($model, 'post_cateid')->dropDownList($cate,['prompt'=>'请选择','style'=>'width:120px'])?>
   
    <?= $form->field($model,'post_content')->textarea(['rows'=>6,'id'=>'editor','class'=>'col-sm-1 col-md-12']);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
