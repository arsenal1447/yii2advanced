<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AdReply */

$this->title = $model->reply_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Replies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-reply-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->reply_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->reply_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reply_id',
            'reply_post',
            'reply_content:ntext',
            'reply_create',
            'reply_user',
            'reply_ip',
            'reply_user_name',
            'reply_title',
            'reply_update:datetime',
            'reply_support',
            'reply_against',
            'reply_floor',
            'reply_note',
            'reply_deld',
            'reply_status',
        ],
    ]) ?>

</div>
