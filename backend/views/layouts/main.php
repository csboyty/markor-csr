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
    <base href="http://localhost/markor-csr/backend/web/">
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
        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="award/index">大学奖学金活动</a>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="speech/college-student">大学生感言</a>
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
                    <a class="sLink" href="trainee/recruit">招募岗位</a>
                </li>
            </ul>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="news/index">艺术.家动态</a>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">艺术.家成果</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="result/love">爱心产品</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="result/student">学生作品</a>
                </li>
            </ul>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="culture-program/index">文化项目</a>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-flag"></span>
            <a class="link" href="video/index">视频</a>
        </li>

        <div class="separate"></div>

        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">美术教室捐赠</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="donation/list">捐赠小学名单</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="speech/activity">活动感言</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="activity/donation">历年活动</a>
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
                    <a class="sLink" href="#">志愿者感言</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="activity/volunteer">历年活动</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <span class="glyphicon glyphicon-th-list"></span>
            <a class="link">儿童画</a>
            <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
            <ul class="subMenu">
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="speech/pupil">小学生感言</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="result/child-product">以往产品</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="result/child-draw">征集函&儿童画</a>
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
                    <a class="sLink" href="speech/teacher-train">培训反馈</a>
                </li>
                <li class="sItem">
                    <span class="circle">原点</span>
                    <a class="sLink" href="activity/teacher-train">历年活动</a>
                </li>
            </ul>
        </li>


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
