<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

use frontend\assets\BowerAsset;
use frontend\assets\EmojifyAsset;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
BowerAsset::register($this);

\frontend\assets\EditorAsset::register($this);
$emojify = EmojifyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
    <?= \frontend\widgets\Nav::widget(); ?>
        <?php
//             NavBar::begin([
//                 'brandLabel' => '我的地盘',
// //                 'brandUrl' => Yii::$app->homeUrl,
//                 'brandUrl' => 'index.php?r=/ad-post/index',
//                 'options' => [
//                     'class' => 'navbar-inverse navbar-fixed-top',
//                 ],
//             ]);
//             $menuItems = [
// //                 ['label' => '首页', 'url' => ['/site/index']],
// //                 ['label' => '关于', 'url' => ['/site/about']],
// //                 ['label' => '通讯录', 'url' => ['/site/contact']],//测试命令行提交
// //                 ['label' => '权限', 'url' => ['/ad-auth-rule/index']],//测试命令行提交
//                 ['label' => Yii::t('app','Post List'), 'url' => ['/ad-post/index']],//测试命令行提交
//                 ['label' => Yii::t('app','User Info'), 'url' => ['/ad-user/info']],//测试命令行提交
//                 ['label' => Yii::t('app','User Notice'), 'url' => ['/ad-notice/index']],//测试命令行提交
//             ];
//             if (Yii::$app->user->isGuest) {
//                 $menuItems[] = ['label' => Yii::t('app','Sign Up'), 'url' => ['/site/signup']];
//                 $menuItems[] = ['label' => Yii::t('app','Login In'), 'url' => ['/site/login']];
// //                 $menuItems[] = ['label' => '测试', 'url' => ['/test/send-mail']];
// //                 $menuItems[] = ['label' => '权限', 'url' => ['/ad-auth-rule/index']];
//             } else {
//                 $menuItems[] = [
// //                     'label' => '离开 (' . Yii::$app->user->identity->user_name . ')',
//                     'label' => Yii::t('app','Login Out').'(' . Yii::$app->user->identity->user_name . ')',
//                     'url' => ['/site/logout'],
//                     'linkOptions' => ['data-method' => 'post']
//                 ];
//             }
//             echo Nav::widget([
//                 'options' => ['class' => 'navbar-nav navbar-right'],
//                 'items' => $menuItems,
//             ]);
//             NavBar::end();
//         ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>
    
    <!--
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
    -->
    
    <footer class="footer">
    <div class="container">
        <div class="row">
            <dl class="col-sm-2">
                <dt>网站信息</dt>
                <dd><a href="<?= Url::to(['/site/about']) ?>">关于我们</a></dd>
                <dd><a href="<?= Url::to(['/site/contributors']) ?>">贡献者</a></dd>
            </dl>
            <dl class="col-sm-2">
                <dt>相关合作</dt>
                <dd><a href="<?= Url::to(['/site/contact']) ?>">联系我们</a></dd>
            </dl>
            <dl class="col-sm-2">
                <dt>关注我们</dt>
                <dd><a href="<?= Url::to(['/site/timeline']) ?>">时间线</a></dd>
            </dl>
            <dl class="col-sm-3">
                <dt> 技术采用</dt>
                <dd class="fs12">
                    由 <a href="https://github.com/forecho">forecho</a> 创建 项目地址: <a href="https://github.com/iiyii/getyii">GetYii</a>
                    <br/>
                    <?= Yii::powered() ?> <?= Yii::getVersion() ?>
                    <br/>
                    &copy; <?= \Yii::$app->setting->get('siteName') ?> <?= date('Y') ?>&nbsp;•&nbsp; <?= floor(Yii::getLogger()->getElapsedTime() * 1000).' ms';?>
                </dd>
            </dl>
            <div class="col-sm-3">
                <a href="http://www.qiniu.com/">
                    <img src="http://assets.qiniu.com/qiniu-transparent.png" alt="qiniu" width="240">
                </a>
                <p>赞助本站，你的LOGO将出现在这里</p>
            </div>
        </div>
    </div>
</footer>

<div class="btn-group-vertical" id="floatButton">
    <button type="button" class="btn btn-default" id="goTop" title="去顶部">
        <span class="glyphicon glyphicon-arrow-up"></span>
    </button>
    <button type="button" class="btn btn-default" id="refresh" title="刷新">
        <span class="glyphicon glyphicon-repeat"></span>
    </button>
    <button type="button" class="btn btn-default" id="pageQrcode" title="本页二维码">
        <span class="glyphicon glyphicon-qrcode"></span>
        <img class="qrcode" width="130" height="130" src="<?= Url::to(['/site/qrcode', 'url' => Yii::$app->request->absoluteUrl])?>" />
    </button>
    <button type="button" class="btn btn-default" id="goBottom" title="去底部">
        <span class="glyphicon glyphicon-arrow-down"></span>
    </button>
</div>


<?php
$this->registerJs(
    'Config = {emojiBaseUrl: "' . $emojify->baseUrl . '"};',
    \yii\web\View::POS_HEAD
);
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
