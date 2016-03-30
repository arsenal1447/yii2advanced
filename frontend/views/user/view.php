<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
use common\models\AdCat;
use app\models\AdPost;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->user_id], [
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
            'user_id',
            'user_title',
//             'user_cateid',
            [
                'label'=>Yii::t('app','Post Cateid'),
                'value'=>AdCat::getCateName($model->user_cateid),
            ],
            [
                'label'=>Yii::t('app','Post User'),
                'value'=>User::getAuthName($model->user_user),
            ],
            'user_content:html',
            [
                'label'=>Yii::t('app','Post Create'),
                'value'=>User::convertDate($model->user_create),
            ],
            [
                'label'=>Yii::t('app','Post Update'),
                'value'=>User::convertDate($model->user_update),
            ],
//             'user_viewcount',
            [
                'label'=>Yii::t('app','Post Viewcount'),
                'value'=>AdPost::getViewCount($model->user_id),
            ],
//             'user_status',
//             'user_deld',
        ],
    ]) ?>

</div>
