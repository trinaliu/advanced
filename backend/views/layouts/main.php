<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3" style="background: black">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand" style="color:white;">My Application</a>
                </div>
            </div>

            <div class="col-md-10 col-sm-9">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!Yii::$app->user->isGuest) :?>
                    <li><a href="/site/logout" data-method="post">退出(<?=Yii::$app->user->identity->email?>)</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-sm-3 sidebar">
            <ul class="nav nav-sidebar" id="nav">
                <li >Permission settings</li>
                <li><a href="/user/index">Admin User</a></li>
                <li><a href="#">Role</a></li>
                <li><a href="#">Permission</a></li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-9 col-md-offset-2 col-sm-offset-3">
            <section class="content-header clearfix">
                <div class="pull-left">
                    <h3><?=$this->title?></h3>
                </div>
                <div class="pull-right">
                    <?=Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])?>
                </div>
            </section>
            <section class="content">
                <?=$content?>
            </section>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script>
    $(function(){
        $('#nav li').each(function(){
            let url = window.location.href;
            //获取当前页面的绝对路径
            url = url.split("//")[1].split("/")[1];
            //判断index
            url = "/" + url + "/index";
            const aUrl = $(this).find("a").attr("href");
            if (url === aUrl) {
                $(this).find("a").parents("li").addClass("active")
                    .siblings().removeClass("active");
            }
        })
    })
</script>