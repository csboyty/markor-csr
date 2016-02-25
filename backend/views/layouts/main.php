<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\AppAsset;

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
    <base href="<?php echo Yii::$app->homeUrl; ?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header">
    <h1 class="logo">美克美家CSR</h1>
    <a href="site/logout" class="logout">退出</a>
</div>

<div class="left">
    <ul class="menu">
        <?php
        if(isset(Yii::$app->user->identity)&&Yii::$app->user->identity->role=="SUPER_ADMIN"){
        ?>
            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="category/index">分类</a>
            </li>

        <?php
            }else{
        ?>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="award/index">大学奖学金活动</a>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="result/college-student">大学生作品</a>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">实习生</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="trainee/mien">风采</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="recruit/trainee">招聘</a>
                </li>
            </ul>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="news/index">艺术•家动态</a>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="culture-program/index">传统文化项目</a>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="video/index">首页视频</a>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">快乐美术教室</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="donation/list">捐赠小学名单</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="activity/donation">历年活动</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">教师培训</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="speech/teacher-train">培训感言</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="activity/teacher-train">培训活动</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="result/teacher">教师作品</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">志愿者活动</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="speech/volunteer">志愿者感言</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="activity/volunteer">志愿者活动</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">儿童画征集</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="video/child-draw">儿童画视频</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="result/love">爱心产品</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="recruit/child-draw">征集函</a>
                </li>
            </ul>
        </li>


        <?php
        }
        ?>
    </ul>
</div>

<div class="right">
    <div class="main">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"><?= Html::encode($this->title) ?></h1>
            </div>
            <div class="panel-body">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>


<div class="loading hidden" id="loading">
    <span class="text">Loading...</span>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
