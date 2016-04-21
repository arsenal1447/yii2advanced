<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdUserMeta */

$this->title = Yii::t('app', 'Create Ad User Meta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad User Metas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-user-meta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
