<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Rbac;
// use Rbac

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Role'), 'url' => ['itemindex']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update-item', 'name' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete-item', 'name' => $model->name], [
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
            [
                'attribute'=>Yii::t('app','Role Name'),
                'format'=>'html',
                'value'=>$model->name,
            ],
            [
                'attribute'=>Yii::t('app','Type'),
                'format'=>'html',
                'value'=>Rbac::getTypeOfRole($model->type),
            ],
            [
                'attribute'=>Yii::t('app','Description'),
                'format'=>'html',
                'value' => $model->description,
            ],
            //'role_name',
            
            [
                'attribute'=>Yii::t('app','Data'),
                'format'=>'html',
                'value' =>$model->data,
            ],
            //'created_at:datetime',
            //'updated_at:datetime',
        ],
    ]) ?>

</div>
