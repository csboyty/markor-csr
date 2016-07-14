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
    <link rel="shortcut icon" href="images/app/logo_title_32X32.ico" type="image/x-icon" />
    <link rel="icon" href="images/app/logo_title_32X32.ico" type="image/x-icon" />
    <link rel="icon" href="images/app/logo_title.png" type=" image/png" >
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode("MARKOR-CSR | ".$this->title) ?></title>
    <base href="<?php echo Yii::$app->request->hostInfo.Yii::$app->homeUrl; ?>">
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
                <a class="link" href="honor/index">艺术家荣誉</a>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="news/index">艺术家动态</a>
            </li>
            <div class="separate"></div>
            <li class="item">
                <span class="glyphicon glyphicon-th-list"></span>
                <a class="link">快乐教室</a>
                <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
                <ul class="subMenu">
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="activity/teacher">历年活动</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="donation/index">捐赠名单</a>
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
                        <a class="sLink" href="activity/teacher-train">历年活动</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="speech/teacher-train">感言</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="result/teacher-train">作品</a>
                    </li>
                </ul>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-th-list"></span>
                <a class="link">志愿者</a>
                <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
                <ul class="subMenu">
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="activity/volunteer">历年活动</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="speech/volunteer">感言</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="volunteer/train">培训</a>
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
                        <a class="sLink" href="child-draw/collect">征集</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="result/child-draw">爱心产品</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="video/child-draw">视频</a>
                    </li>
                </ul>
            </li>

            <div class="separate"></div>

            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="award/index">高校奖学金活动</a>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="result/college-student">大学生作品</a>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-th-list"></span>
                <a class="link">实习生招募</a>
                <span class="glyphicon glyphicon-chevron-down rightIcon"></span>
                <ul class="subMenu">
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="speech/trainee">感言</a>
                    </li>
                    <li class="sItem">
                        <span class="circle">原点</span>
                        <a class="sLink" href="recruit/index">招聘</a>
                    </li>
                </ul>
            </li>


            <div class="separate"></div>

            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="culture-program/index">艺术传承</a>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="story/index">人物故事</a>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="wechat/index">微信头条</a>
            </li>
            <li class="item">
                <span class="glyphicon glyphicon-flag"></span>
                <a class="link" href="video/index">视频</a>
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
