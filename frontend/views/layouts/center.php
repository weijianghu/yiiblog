<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

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
    <style>
        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            font-family: 'Microsoft Yahei', '微软雅黑', '宋体', \5b8b\4f53, Tahoma, Arial, Helvetica, STHeiti;
            margin: 0;
        }

        .main-nav {
            margin-left: 1px;
        }

        .main-nav.nav-tabs.nav-stacked > li {
        }

        .main-nav.nav-tabs.nav-stacked > li > a {
            padding: 10px 8px;
            font-size: 12px;
            font-weight: 600;
            color: #4A515B;
            background: #E9E9E9;
            background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9));
            background: -webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            background: -o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            background: -ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            background: linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
            border: 1px solid #D5D5D5;
            border-radius: 4px;
        }

        .main-nav.nav-tabs.nav-stacked > li > a > span {
            color: #4A515B;
        }

        .main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
            color: #FFF;
            background: #3C4049;
            background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4A515B), color-stop(100%,#3C4049));
            background: -webkit-linear-gradient(top, #4A515B 0%,#3C4049 100%);
            background: -o-linear-gradient(top, #4A515B 0%,#3C4049 100%);
            background: -ms-linear-gradient(top, #4A515B 0%,#3C4049 100%);
            background: linear-gradient(top, #4A515B 0%,#3C4049 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
            border-color: #2B2E33;
        }

        #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
            color: #FFF;
        }

        .main-nav.nav-tabs.nav-stacked > li {
            margin-bottom: 4px;
        }

        .nav-header.collapsed > span.glyphicon-chevron-toggle:before {
            content: "\e114";
        }

        .nav-header > span.glyphicon-chevron-toggle:before {
            content: "\e113";
        }

        footer.duomi-page-footer {
            background-color: white;
        }

        footer.duomi-page-footer .beta-message {
            color: #a4a4a4;
        }

        footer.duomi-page-footer .beta-message a {
            color: #53a2e4;
        }

        footer.duomi-page-footer .list-inline a, footer.authenticated-footer .list-inline li {
            color: #a4a4a4;
            padding-bottom: 30px;
        }




        footer.duomi-page-footer {
            background-color: white;
        }

        footer.duomi-page-footer .beta-message {
            color: #a4a4a4;
        }

        footer.duomi-page-footer .beta-message a {
            color: #53a2e4;
        }

        footer.duomi-page-footer .list-inline a, footer.authenticated-footer .list-inline li {
            color: #a4a4a4;
            padding-bottom: 30px;
        }

        /*********************************************自定义部分*********************************************/
        .secondmenu a {
            font-size: 12px;
            color: #4A515B;
            border-radius: 4px;
        }

        .secondmenu > li > a:hover {
            background-color: #6f7782;
            border-color: #428bca;
            color: #fff;
        }

        .secondmenu li.active {
            background-color: #6f7782;
            border-color: #428bca;
            border-radius: 4px;
        }

        .secondmenu li.active > a {
            color: #ffffff;
        }

        .navbar-static-top {
            background-color: #212121;
            margin-bottom: 5px;
        }

        .navbar-brand {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
        }

        .navbar-brand:hover {
            color: #fff;
        }
        .collapse.glyphicon-chevron-toggle, .glyphicon-chevron-toggle:before {
            content: "\e113";
        }
        .collapsed.glyphicon-chevron-toggle:before {
            content: "\e114";
        }
    </style>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/index/index']],
        ['label' => 'About', 'url' => ['/index/about']],
        ['label' => 'Contact', 'url' => ['/index/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/index/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/index/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/index/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
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

        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="main-nav nav nav-tabs nav-stacked" style="">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            首页
                        </a>
                    </li>
                    <li>
                        <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-cog"></i>
                            系统设置
                            <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                        </a>
                        <ul id="systemSetting" class="nav nav-list secondmenu collapse" style="height: 0px;">
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;账号管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>&nbsp;修改密码</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#configSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            内容管理
                            <span class="pull-right glyphicon  glyphicon-chevron-toggle"></span>
                        </a>
                        <ul id="configSetting" class="nav nav-list secondmenu collapse in">
                            <li class="active"><a href="<?=\yii\helpers\Url::toRoute(['category'])?>"><i class="glyphicon glyphicon-globe"></i>&nbsp;分类管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star-empty"></i>&nbsp;内容管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"></i>&nbsp;标签管理</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
            <?= $content?>
            </div>
        </div>

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
