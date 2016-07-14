<?php
use frontend\models\Helper;

    $this->title = '儿童画征集与产品开发';
    $this->params=[
        "breadcrumbs"=>[
            [
                'label' => '艺术启蒙',
                'url' => ['enlightenment/index']
                //'template' => "<li><b>{link}</b></li>\n", // template for this link only
            ],
            [
                'label' => "儿童画征集与产品开发"
            ]
        ]
    ]
?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/childDraw.jpg" srcset="images/app/pageTop/childDraw@2x.jpg 2x">
    <div class="info">
        <h2 class="title">儿童画征集与产品开发</h2>
        <p class="excerpt">
            美克美家每年举办不同主题的“我的童话世界”儿童绘画征集活动
            为受捐小学的同学搭建展示艺术才华的平台，为孩子们提供一个展示艺术、激发创作力的开放平台
            以儿童绘画作品为元素，设计开发出一系列家具产品，将其实际销售额的10%将直接用于青少年艺术教育支持
        </p>
    </div>
</div>
<div class="section">
    <h2 class="sectionTitle titleChildDraw">儿童画征集</h2>
    <ul class="list1 list1M list12 list1M1">
        <?php
            foreach($collectResults as $cr){
                ?>
                <li class="item">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($cr->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $cr->thumb; ?>" >
                        </picture>
                    </div>

                    <div class="info">
                        <h2 class="title"><?= $cr->title; ?></h2>
                        <p class="author"><?= $cr->author; ?></p>
                    </div>
                </li>
                <?php
            }
        ?>
    </ul>
    <a class="more" href="enlightenment/child-draw/collect">更多</a>
</div>
<div class="section">
    <h2 class="sectionTitle titleChildDrawWorks">爱心产品</h2>
    <ul class="list1 list12 list1M list1M1">
        <?php
            foreach($workResults as $wr){
                ?>
                <li class="item">
                   <div class="thumbContainer">
                    <picture>
                        <source srcset="<?= Helper::getSuffixFile($wr->thumb); ?>" media="(max-width: 768px)">
                        <img class="thumb" src="<?= $wr->thumb; ?>" >
                    </picture>
                    </div>
                    <div class="info">
                        <h2 class="title"><?= $wr->title; ?></h2>
                        <p class="author"><?= $wr->author; ?></p>
                        <p class="excerpt moreEllipsis" data-row="3">
                                <?= $wr->excerpt; ?>
                            </p>
                    </div>
                </li>
                <?php
            }
        ?>
    </ul>
    <a class="more" href="works/<?= Yii::$app->params["categories"]["resultChildDraw"]; ?>">更多</a>
</div>
<div class="section">
    <h2 class="sectionTitle titleChildDrawVideo">儿童画视频</h2>
    <ul class="list1 list12 list1M list1M1">
        <?php
            foreach($videoResults as $vr){
                ?>
                <li class="item">
                    <a href="videos/<?= $vr->id; ?>">
                        <div class="thumbContainer">
                            <picture>
                                <source srcset="<?= Helper::getSuffixFile($vr->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $vr->thumb; ?>" >
                            </picture>
                        </div>

                        <div class="info">
                            <h2 class="title"><?= $vr->title; ?></h2>
                            <p class="author"><?= $vr->author; ?></p>
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
</div>