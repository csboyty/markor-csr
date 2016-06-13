<?php

/* @var $this yii\web\View */

$this->title = '首页';
$this->registerCssFile("@web/css/lib/flexslider.css");
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
                </a>
            </li>
            <?php
        }
    ?>
</ul>
<!--滚动图片-->
<div id="slider" class="flexslider">
    <ul class="slides">
        <?php
            foreach($rollResults as $rr){
                ?>
                <li>
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
</div>

<div class="section">
    <h2 class="sectionTitle titleFeature">热点</h2>
    <ul class="list">
        <li class="item">
            <div class="thumbContainer">
                <img class="thumb" src="data/square/1.jpg">
            </div>
            <div class="info">
                <h3 class="title"><a href="#">新通道三江源项目</a></h3>
                <p class="excerpt moreEllipsis" data-row="3">
                    展览当日，几十平米的“新通道”项目展区直观呈现了在保护侗锦、及传统手工艺等国家级非物质文化遗产过程中所取得的成果，
                    一件件作品将侗族传统文化艺术元素融入现代生活中，创新的形式与内容将人们引入到一个充满艺术与传统的世界中。
                </p>
                <a class="tag" href="artInherit.html" >艺术传承</a>
            </div>
        </li>
        <li class="item">
            <div class="thumbContainer">
                <img class="thumb" src="data/square/1.jpg">
            </div>
            <div class="info">
                <h3 class="title"><a href="#">新通道三江源项目</a></h3>
                <p class="excerpt moreEllipsis" data-row="3">
                    展览当日，几十平米的“新通道”项目展区直观呈现了在保护侗锦、及传统手工艺等国家级非物质文化遗产过程中所取得的成果，
                    一件件作品将侗族传统文化艺术元素融入现代生活中，创新的形式与内容将人们引入到一个充满艺术与传统的世界中。
                </p>
                <a class="tag" href="artInherit.html" >艺术传承</a>
            </div>
        </li>
        <li class="item">
            <div class="thumbContainer">
                <img class="thumb" src="data/square/1.jpg">
            </div>
            <div class="info">
                <h3 class="title"><a href="#">新通道三江源项目</a></h3>
                <p class="excerpt moreEllipsis" data-row="3">
                    展览当日，几十平米的“新通道”项目展区直观呈现了在保护侗锦、及传统手工艺等国家级非物质文化遗产过程中所取得的成果，
                    一件件作品将侗族传统文化艺术元素融入现代生活中，创新的形式与内容将人们引入到一个充满艺术与传统的世界中。
                </p>
                <a class="tag" href="#" >艺术传承</a>
            </div>
        </li>
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
                        <img class="thumb" src="<?= $sr->thumb; ?>">
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
                    <a target="_blank" href="<?= $v->memo; ?>">
                        <img class="thumb" src="<?= $v->thumb; ?>">
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
                    <img src="images/app/partners/industry-design.png" srcset="images/app/partners/industry-design@2x.png">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/hnu.png" srcset="images/app/partners/hnu@2x.png">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/tj.png" srcset="images/app/partners/tj@2x.png">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/desis-china.png" srcset="images/app/partners/desis-china@2x.png">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/youth.png" srcset="images/app/partners/youth@2x.png">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/china-academy.png" srcset="images/app/partners/china-academy@2x.png">
                </a>
            </td>
            <td>
                <a href="#">
                    <img src="images/app/partners/sc.png" srcset="images/app/partners/sc@2x.png">
                </a>
            </td>
        </tr>
    </table>
</div>


<?php
    $this->registerJsFile("@web/js/lib/jquery.flexslider-min.js",['depends' => [frontend\assets\AppAsset::className()]]);
    $this->registerJsFile("@web/js/src/index.js",['depends' => [frontend\assets\AppAsset::className()]]);
?>