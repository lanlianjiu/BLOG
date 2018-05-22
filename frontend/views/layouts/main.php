<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
        'brandLabel' => Yii::t('common','Blog'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $leftMenuItems = [
        ['label' => Yii::t('yii','Home'), 'url' => ['/site/index']],
        ['label' => Yii::t('common','Post'), 'url' => ['/post/index']],
         ['label' => Yii::t('common','cretae'), 'url' => ['/post/create']],
        ['label' => Yii::t('common','About'), 'url' => ['/site/about']],
        ['label' => Yii::t('common','Contact'), 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $rightMenuItems[] = ['label' => Yii::t('common','Signup'), 'url' => ['/site/signup']];
        $rightMenuItems[] = ['label' => Yii::t('common','Login'), 'url' => ['/site/login']];
    } else {
        $rightMenuItems[] = 
        [
            'label' => '<img style="height:23px;width:30px;" src="'.Yii::$app->params['avatar']['smanll'].'" alt="' . Yii::$app->user->identity->username . '"/>',
            'linkOptions' => ['class' => 'avatar'],
            'items' => [
                ['label' => '<i class="fa fa-sign-out"></i>退出','url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']],
                // ['label' => '个人中心','url' => ['/site/logout']]
            ],
        ];
        // '<li>'
        //     . Html::beginForm(['/site/logout'], 'post')
        //     . Html::submitButton(
        //         '退出<img src="/statics/images/avatar/smll.png" alt="' . Yii::$app->user->identity->username . '"/>',
        //         ['class' => 'btn btn-link logout']
        //     )
        //     . Html::endForm()
        //     . '</li>';
    };

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $leftMenuItems,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => $rightMenuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 我的站点 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
