<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
    <title><?= Html::encode("MARKOR-CSR|".$this->title) ?></title>
    <base href="<?php echo Yii::$app->homeUrl; ?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="header">
        <h1 class="logo">
            <a href="<?php echo Yii::$app->homeUrl; ?>">MARKOR-CSR</a>
        </h1>
        <ul class="menu displayNoneInMobile">
            <li class="item">
                <a href="<?php echo Yii::$app->homeUrl; ?>">首页</a>
            </li>
            <li class="item">
                <a href="about/index">关于艺术·家</a>
                <ul class="subMenu" style="padding-left: 60%;">
                    <li class="item">
                        <a href="about/honor">艺术·家荣誉</a>
                    </li>
                    <li class="item">
                        <a href="about/news">艺术·家动态</a>
                    </li>
                </ul>
            </li>
            <li class="item">
                <a href="enlightenment/index">艺术启蒙</a>
                <ul class="subMenu" style="padding-left: 65%">
                    <li class="item">
                        <a href="enlightenment/room">快乐美术教室</a>
                    </li>
                    <li class="item">
                        <a href="enlightenment/teacher-train">教师培训</a>
                    </li>
                    <li class="item">
                        <a href="enlightenment/volunteer">志愿者活动</a>
                    </li>
                    <li class="item">
                        <a href="enlightenment/child-draw">儿童画征集与产品开发</a>
                    </li>
                </ul>
            </li>
            <li class="item">
                <a href="education/index">艺术教育</a>
                <ul class="subMenu"  style="padding-left: 72%">
                    <li class="item">
                        <a href="education/awards">高校奖学金活动</a>
                    </li>
                    <li class="item">
                        <a href="works/<?= Yii::$app->params["categories"]["resultCollegeStudent"];?>">大学生作品</a>
                    </li>
                    <li class="item">
                        <a href="education/trainee">实习生招募</a>
                    </li>
                </ul>
            </li>
            <li class="item">
                <a href="culture-programs/index">艺术传承</a>
            </li>
            <li class="item">
                <a href="stories/index">人物·故事</a>
            </li>
        </ul>
        <div class="searchContainer displayNoneInMobile">
            <input class="input" type="text" placeholder="请输入您要搜索的内容">
            <div class="ctrl">
                <span class="icon-search"></span>
            </div>
        </div>
        <div class="menuMContainer displayInMobile">
            <span class="menuIcon" id="menuIcon">
                <em class="icon-menu"></em>
            </span>
            <ul class="menuM" id="menuM">
                <li class="item">
                    <a href="#">首页</a>
                </li>
                <li class="item">
                    <span class="subMenuIcon plus"></span>
                    <a href="about/index">关于艺术·家</a>
                    <ul class="subMenu">
                        <li class="item">
                            <a href="about/honor">艺术·家荣誉</a>
                        </li>
                        <li class="item">
                            <a href="about/news">艺术·家动态</a>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <span class="subMenuIcon plus"></span>
                    <a href="enlightenment/index">艺术启蒙</a>
                    <ul class="subMenu">
                        <li class="item">
                            <a href="enlightenment/room">快乐美术教室</a>
                        </li>
                        <li class="item">
                            <a href="enlightenment/teacher-train">教师培训</a>
                        </li>
                        <li class="item">
                            <a href="enlightenment/volunteer">志愿者活动</a>
                        </li>
                        <li class="item">
                            <a href="enlightenment/child-draw">儿童画征集与产品开发</a>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <span class="subMenuIcon plus"></span>
                    <a href="education/index">艺术教育</a>
                    <ul class="subMenu"  style="padding-left: 72%">
                        <li class="item">
                            <a href="education/awards">高校奖学金活动</a>
                        </li>
                        <li class="item">
                            <a href="works/<?= Yii::$app->params["categories"]["resultCollegeStudent"];?>">大学生作品</a>
                        </li>
                        <li class="item">
                            <a href="education/trainee">实习生招募</a>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <a href="culture-programs/index">艺术传承</a>
                </li>
                <li class="item">
                    <a href="stories/index">人物·故事</a>
                </li>
                <li class="item">
                    <a href="#">
                        <img src="images/app/weixinGray.png" style="vertical-align: middle">&nbsp;&nbsp;美克美家
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <img src="images/app/weiboGray.png" style="vertical-align: middle">&nbsp;&nbsp;我爱艺术家
                    </a>
                </li>
                <li class="item">
                    <span class="searchIcon"><em class="icon-search"></em></span>
                    <input type="text" class="searchInput" placeholder="search">
                </li>
            </ul>
        </div>
    </div>
    <?= Breadcrumbs::widget([
        'itemTemplate' => "<li>{link}</li>", // template for all links
        'activeItemTemplate'=>"<li>{link}</li>",
        'homeLink'=>[
            'label' =>'首页',
            'url'=>Yii::$app->homeUrl
        ],
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>

    <?= $content ?>

    <div class="footer">
        <table class="contactInfo displayNoneInMobile">
            <tr>
                <td>
                    <p class="icon">
                        <span class="icon-tel"></span>
                    </p>
                    <p class="content">
                        TEL:010-63862727
                        <br>
                        csr@markorhome.com
                    </p>
                </td>
                <td>
                    <p class="icon">
                        <span class="icon-address"></span>
                    </p>
                    <p class="content">
                        www.markorhome.com/csr
                        <br>
                        北京市丰台区西三环南路57号
                        <br>
                        丽江泽桥美克大厦3楼
                    </p>
                </td>
                <td>
                    <p><img src="images/app/weixin.png" class="iconWeb">&nbsp;&nbsp;美克美家</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/app/weibo.png" class="iconWeb">&nbsp;&nbsp;我爱艺术家</p>
                </td>
            </tr>
        </table>
        <p class="copyRight displayNoneInMobile">Copyright &copy;2007-2020 MARKOR FURNISHINGS</p>
        <p class="copyRight displayInMobile">
            TEL: 010-63862727<br>
            地址：北京市丰台区三环南路57号丽江泽桥美克大厦3层<br>
            Copyright &copy;2007-2020 MARKOR FURNISHINGS
        </p>
    </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
