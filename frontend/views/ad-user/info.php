<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\AdPost */
$this->title = $model->user_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Info'), 'url' => ['info']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-post-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php if($model->user_id==yii::$app->user->id){?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
    </p>
    <?php }?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            [
                'attribute'=>Yii::t('app','User Name'),
                'format'=>'html',
                'value'=>$model->user_name,
            ],
//             'user_content:html',
            [
                'label'=>Yii::t('app','User Create'),
                'value'=>User::convertDate($model->user_create),
            ],
            [
                'label'=>Yii::t('app','User Logintime'),
                'value'=>User::convertDate($model->user_logintime),
            ],
            [
                'attribute'=>Yii::t('app','User Ip'),
                'format'=>'html',
                'value'=>$model->user_ip,
            ],
            [
                'attribute'=>Yii::t('app','User Nickname'),
                'format'=>'html',
                'value'=>$model->user_nickname,
            ],
            'user_role',
//             [
//                 'label'=>Yii::t('app','Post Viewcount'),
//                 'value'=>AdPost::getViewCount($model->user_id),
//             ],
//             'user_status',
//             'user_deld',
        ],
    ]) ?>

</div>
