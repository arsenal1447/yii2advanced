<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdNotice */

// die('9');
$this->title = Yii::t('app', 'Create Ad Notice');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Notices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-notice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
