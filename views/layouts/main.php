<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<!--导航条-->
<nav class="navbar navbar-inverse navbar-fixed-top">
<!--   反色导航条 "navbar navbar-inverse"   -->
    <div class="container-fluid ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">RBAC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"> 首页 </a></li>
            </ul>
<!--            <p class="navbar-text navbar-right"> hi xxx <span></span></p>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"> hi xxx </a></li>
                <li><a href="#"></a></li>

            </ul>
        </div>
    </div>
</nav>

<!--左侧菜单栏-->
<div class="container-fluid">
    <div class="col-sm-2 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li>权限演示页面</li>
            <li><a href="">测试页面一</a></li>
            <li><a href="">测试页面二</a></li>
            <li><a href="">测试页面三</a></li>
            <li><a href="">测试页面四</a></li>
            <li><a href="">测试页面五</a></li>
            <li>系统设置</li>
            <li><a href="">用户管理</a></li>
            <li><a href="">角色管理</a></li>
            <li><a href="">权限管理</a></li>
        </ul>
    </div>
    <div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 main">
        <?=$content;?>
        <hr>
        <footer>
            <p class="pull-left">@xShaunMoore</p>
            <p class="pull-right">Power By xShaunMoore</p>
        </footer>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
