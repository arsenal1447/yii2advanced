<?php
use yii\widgets\Menu;

$user = Yii::$app->user->identity;
$networksVisible = count(Yii::$app->authClientCollection->clients) > 0;

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= \yii\helpers\Html::img($user->getUserAvatar(24), ['class' => 'img-rounded', 'alt' => $user->user_name]);?>
            <?= $user->user_name ?>
        </h3>
    </div>
    <div class="panel-body">
        <?= Menu::widget([
            'options' => [
                'class' => 'nav nav-pills nav-stacked'
            ],
            'items' => [
                ['label' => '个人资料',  'url' => ['/setting/profile']],
                ['label' => '账号设置',  'url' => ['/setting/account']],
                ['label' => '更换头像',  'url' => ['/setting/avatar']],
                ['label' => '打赏设置',  'url' => ['/setting/donate']],
                ['label' => '账号绑定', 'url' => ['/setting/networks'], 'visible' => $networksVisible],
            ]
        ]) ?>
    </div>
</div>