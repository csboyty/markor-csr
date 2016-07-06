<?php

/* @var $this yii\web\View */

use frontend\models\Helper;

$this->title = '首页';
//$this->registerCssFile("@web/css/lib/flexslider.css");
$this->registerCssFile("@web/css/lib/swiper.min.css");
?>
<!--微信推荐文章--->
<ul class="weChatList displayNoneInMobile">
    <?php
        foreach($wechatResults as $wr){
            ?>
            <li class="item">
                <a class="link" target="_blank" href="<?= $wr->memo; ?>">
                    <img class="thumb" src="<?= $wr->thumb; ?>">
                    <h3 class="title"><?= $wr->title; ?></h3>
                    <p class="date"><?= $wr->date; ?></p>
                </a>
            </li>
            <?php
        }
    ?>
</ul>
<!--滚动图片-->
<div id="slider" class="siwper-container">
    <ul class="swiper-wrapper">
        <?php
            foreach($rollResults as $rr){
                ?>
                <li class="swiper-slide">
                    <a href="about/news/<?= $rr->id; ?>">
                        <img src="<?= $rr->bg_image; ?>" />
                        <div class="detail">
                            <h2 class="title"><?= $rr->title; ?></h2>
                            <p class="excerpt"><?= $rr->excerpt; ?></p>
                        </div>
                    </a>
                </li>
                <?php
            }
        ?>
    </ul>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<div class="section">
    <h2 class="sectionTitle titleFeature">热点</h2>
    <ul class="list">
        <?php
            foreach($enlightenmentResults as $er){
                ?>
                <li class="item">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($er->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $er->thumb; ?>" >
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis"><a href="activities/<?= $er->id; ?>"><?= $er->title; ?></a></h3>
                        <p class="excerpt gradient">
                            <?= $er->excerpt; ?>
                        </p>
                        <a class="tag" href="enlightenment/index" >艺术启蒙</a>
                    </div>
                </li>
                <?php
            }
        ?>

        <?php
        foreach($educationResults as $er1){
            ?>
            <li class="item">
                <div class="thumbContainer">
                    <picture>
                        <source srcset="<?= Helper::getSuffixFile($er1->thumb); ?>" media="(max-width: 768px)">
                        <img class="thumb" src="<?= $er1->thumb; ?>" >
                    </picture>
                </div>
                <div class="info">
                    <h3 class="title ellipsis"><a href="education/awards/<?= $er1->id; ?>"><?= $er1->title; ?></a></h3>
                    <p class="excerpt gradient">
                        <?= $er1->excerpt; ?>
                    </p>
                    <a class="tag" href="education/index" >艺术教育</a>
                </div>
            </li>
        <?php
        }
        ?>

        <?php
        foreach($cPResults as $cr){
            ?>
            <li class="item">
                <div class="thumbContainer">
                    <picture>
                        <source srcset="<?= Helper::getSuffixFile($cr->thumb); ?>" media="(max-width: 768px)">
                        <img class="thumb" src="<?= $cr->thumb; ?>" >
                    </picture>
                </div>
                <div class="info">
                    <h3 class="title"><a href="culture-programs/<?= $cr->id; ?>"><?= $cr->title; ?></a></h3>
                    <p class="excerpt gradient">
                        <?= $cr->excerpt; ?>
                    </p>
                    <a class="tag" href="culture-programs/index" >艺术传承</a>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</div>
<div class="section bgf4f4f4">
    <h2 class="sectionTitle titleStory">人物·故事</h2>
    <ul class="list1">
        <?php
            foreach($storyResults as $sr){
                ?>
                <li class="item">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($sr->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $sr->thumb; ?>" >
                        </picture>
                    </div>

                    <div class="info">
                        <h2 class="title ellipsis"><a href="story/<?= $sr->id; ?>"><?= $sr->title; ?></a></h2>
                        <p class="author"><?= $sr->author; ?></p>
                        <p class="excerpt moreEllipsis" data-row="3">
                            <?= $sr->excerpt; ?>
                        </p>
                        <a href="story/index" class="tag">人物故事</a>
                    </div>
                </li>
                <?php
            }
        ?>
    </ul>
</div>
<div class="section">
    <h2 class="sectionTitle titleVideo">视频</h2>
    <ul class="list1 list11">
        <?php
            foreach($videos as $v){
                ?>
                <li class="item">
                    <a href="videos/<?= $v->id; ?>">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($v->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $v->thumb; ?>" >
                        </picture>
                        <div class="info">
                            <h2 class="title"><?= $v->title; ?></h2>
                            <p class="icon">
                                <span class="icon-play"></span>
                            </p>
                        </div>
                    </a>
                </li>
                <?php
            }

        ?>

    </ul>
    <a href="videos/index" class="more">更多</a>
</div>
<div class="section bgf4f4f4 sectionMobile">
    <h2 class="sectionTitle titlePartner displayNoneInMobile">合作伙伴</h2>
    <table class="contentTable">
        <tr>
            <td>
                <a href="#">
                    <img src="images/app/partners/industry-design.png" srcset="images/app/partners/industry-design@2x.png 2x">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/hnu.png" srcset="images/app/partners/hnu@2x.png 2x">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/tj.png" srcset="images/app/partners/tj@2x.png 2x">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/desis-china.png" srcset="images/app/partners/desis-china@2x.png 2x">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/youth.png" srcset="images/app/partners/youth@2x.png 2x">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/china-academy.png" srcset="images/app/partners/china-academy@2x.png 2x">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/sc.png" srcset="images/app/partners/sc@2x.png 2x">
                </a>
            </td>
        </tr>
    </table>
</div>


<?php
//    $this->registerJsFile("@web/js/lib/jquery.flexslider-min.js",['depends' => [frontend\assets\AppAsset::className()]]);
    $this->registerJsFile("@web/js/lib/jquery.swiper.jquery.min.js",['depends' => [frontend\assets\AppAsset::className()]]);
    $this->registerJsFile("@web/js/src/index.js",['depends' => [frontend\assets\AppAsset::className()]]);
?>