<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;
use common\models\User;
use common\models\AdCat;
use common\models\Reply;
use app\models\AdPost;
use yii\widgets\ActiveForm;
// use yii\web\View;
use yii\helpers\Url;
use base\Ad;


/* @var $this yii\web\View */
/* @var $model app\models\AdPost */

//$this->params['breadcrumbs'][] = ['label' => $currentBoard['name'], 'url' => ['index&board='.$currentBoard['id']]];
$this->title = $postmodel->post_title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">
    <div class="tbox">
        <div class="floatl">
            <?php //echo Html::a('发帖', ['new-post','boardid'=>$currentBoard['id']], ['class' => 'btn btn-success']) ?>
			<?= Html::a(Yii::t('app', 'Create Ad Post'), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="floatr">
            <?php echo LinkPager::widget(['pagination' => $pages,]);?>
        </div>
    </div>

    <div class="tbox post-list">
        <table class="post border">
            <tr>
                <td class="post-left-column header">
                    <div>
                        查看：<span><?php echo $postmodel->post_viewcount;?></span>回复：<span><?php echo $postmodel->post_replycount;?></span>
                    </div>
                </td>
                <td class="post-right-column header">
                    <div>
                            <b><?= Html::encode($postmodel->post_title) ?></b>
                    </div>
                </td>
            </tr>
        </table>

        <?php
            $floor = 0;
            foreach ($rows as $row){
                $floor+=1;
        ?>
        <div id="post_<?php echo $row['reply_id'];?>">
            <table class="post border">
                <tr>
                    <td class="post-left-column header">
                        <div class="dashed-border-b padding-b8">
                            <span><?php echo $row['reply_user_name'];?></span>
                        </div>
                    </td>
                    <td class="post-right-column header">
                        <div class="dashed-border-b padding-b8">
                            发表于：<span><?php echo AdPost::convertDate($row['reply_create']);?></span> <span class="floatr"><?php echo $floor;?>楼</span>
                        </div>
                    </td>
                </tr>
                <tr style="height: 80px;">
                    <td class="post-left-column body">
                        <div>
                            <span></span>
                        </div>
                    </td>
                    <td class="post-right-column body content">
                        <div>
                            <?php echo $row['reply_content'];?>
                        </div>
                    </td>
                </tr>
                <?php if($row['reply_user']==Ad::getIdentity()->id):?>
                <tr>
                    <td class="post-left-column footer">
                    </td>
                    <td class="post-right-column footer">
                        <div class="dashed-border-t">
                            <span>回复</span>
                            <span>
                            <?php
                                if($floor==1){
                                    echo Html::a('编辑', ['edit-post', 'id' =>$postmodel->post_id,'boardid'=>$currentBoard['id']]).'</span><span>';
                                    echo Html::a('删除', ['delete', 'id' =>$postmodel->post_id,'boardid'=>$currentBoard['id']], [
                                        'data' => [
                                            'confirm' => 'Are you sure you want to delete this item?',
                                            'method' => 'post',
                                        ],
                                    ]);
                                }else{
                                    echo Html::a('编辑', ['edit-post','id'=>$row['reply_post'],'boardid'=>$currentBoard['id']]);
                                }
                            ?>
                            </span><span>支持</span><span>反对</span>
                        </div>
                    </td>
                </tr>
                <?php endif;?>
            </table>
        </div>
        <?php }?>
    </div>
    <div class="tbox">
        <div class="floatl">
            <?= Html::a('发帖', ['new-post','boardid'=>$currentBoard['id']], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="floatr">
            <?php echo LinkPager::widget([
                'pagination' => $pages,
            ]);?>
        </div>
    </div>
   <div class="tbox">
       <?php $form = ActiveForm::begin([
                'id'=>'newPost',
                'action' => Ad::getHomeUrl().'?r=ad-post/new-reply&id='.$postmodel->post_id,
        ]); ?>

            <input type="hidden" id="post-board_id" name="Reply[board_id]" value="<?php echo $currentBoard['id']?>"/>
            <input type="hidden" id="post-post_id" name="Reply[post_id]" value="<?php echo $postmodel->post_id?>"/>
            <input type="hidden" id="post-post_title" name="Reply[post_title]" value="<?php echo $postmodel->post_title?>"/>

            <?php
                $label= "回帖".Html::a("(高级)", ['new-post','postid'=>$postmodel->post_id,'boardid'=>$currentBoard['id']]);
                echo $form->field($newPost, 'reply_content',['template'=>"$label.\n{input}\n{hint}\n{error}"])->textarea(['rows' => 6]);
             ?>

            <div class="form-group">
                <?= Html::submitButton("回帖", ['class' => 'btn btn-success']) ?>
            </div>

        <?php ActiveForm::end(); ?>
   </div>



</div>
