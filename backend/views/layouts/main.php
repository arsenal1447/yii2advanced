<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
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
        <?php
            NavBar::begin([
                'brandLabel' => Yii::t('app','My Place'),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => Yii::t('app','Home'), 'url' => ['/site/index']],
//                 ['label' => '添加', 'url' => ['/ad-admin/create']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' =>Yii::t('app','Login'), 'url' => ['/site/login']];
            } else {
                $menuItems[] = ['label' =>Yii::t('app','Catelist'), 'url' => ['/ad-cat/index']];
                $menuItems[] = ['label' =>Yii::t('app','Permission'), 'url' => ['/rbac/itemindex']];
                $menuItems[] = ['label' =>Yii::t('app','Role'), 'url' => ['/role/index']];
                $menuItems[] = ['label' =>Yii::t('app','Permission'), 'url' => ['/permission/index']];
                $menuItems[] = ['label' =>Yii::t('app','Add Test Role'), 'url' => ['/ad-auth-item/create']];
                $menuItems[] = ['label' =>Yii::t('app','Add Admin'), 'url' => ['/ad-admin/create']];
                $menuItems[] = ['label' =>Yii::t('app','User List'), 'url' => ['/ad-user/index']];
                $menuItems[] = [
                    'label' => Yii::t('app','Login Out').'(' . Yii::$app->user->identity->admin_name . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
