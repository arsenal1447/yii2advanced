<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '标签云';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= $this->title; ?>
    </div>
    <div class="panel-body tag-cloud">
        <?php foreach ($tags as $tag) {
            $i = (int)($tag->tag_count / 3);
            echo Html::a($tag->tag_name, ['/ad-post', 'tag' => $tag->tag_name], ['class' => 'cloud-' . $i]);
        } ?>
    </div>
</div>