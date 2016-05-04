<?php
use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <?= \Yii::t('app', 'Received {0} reply', $model->post_reply_count) ?>
        <?php if ($tags = $model->post_tags): ?>
            <span class="pull-right">
                <i class="icon-tags"></i>
                <?php foreach (explode(',', $tags) as $key => $value){
                    echo Html::a(Html::encode($value),
                        ['/ad-post', 'tag' => $value],
                        ['class' => 'btn btn-xs btn-primary']
                    ), ' ';} ?>
            </span>
        <?php endif ?>
    </div>

    <?= \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'list-group-item media mt0'],
        'summary' => false,
        'itemView' => '_item',
    ]) ?>
</div>