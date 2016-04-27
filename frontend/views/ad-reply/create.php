<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdReply */

$this->title = Yii::t('app', 'Create Ad Reply');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Replies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-reply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
