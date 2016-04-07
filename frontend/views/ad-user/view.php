<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\AdUser */

$this->title = $model->user_name;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-user-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if($model->id==yii::$app->user->id){?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <?php }?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_name',
            'user_email:email',
            [
                'label'=>Yii::t('app','User Create'),
                'value'=>User::convertDate($model->user_create),
            ],
            [
                'label'=>Yii::t('app','User Logintime'),
                'value'=>User::convertDate($model->user_logintime),
            ],
            'user_ip',
            'user_nickname',
            'user_role',
        ],
    ]) ?>

</div>
