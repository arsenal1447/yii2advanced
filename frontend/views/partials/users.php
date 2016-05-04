<?php
use yii\helpers\Html;
/** @var \yii\base\Object $model */
/** @var \common\models\User $value */
?>

<?php foreach ($model as $key => $value): ?>
    <div class="col-xs-2" style="min-width: 100px;">
        <div class="media user-card">
            <div class="media-left">
                <?= Html::a(Html::img($value->user_avatar, ['class' => 'media-object']),
                    ['/ad-user/show', 'username' => $value['user_name']],
                    ['title' => $value['user_name']]
                ); ?>
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <?= Html::a(
                        \yii\helpers\StringHelper::byteSubstr($value['user_name'], 0, 10),
                        ['/ad-user/show', 'username' => $value['user_name']],
                        ['title' => $value['user_name']]
                    ); ?>
                </div>
                <div class="">
                    积分：<?= $value->merit ? $value->merit->merit : 0 ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
