<?php
use frontend\models\Helper;
use common\models\Post;

$this->title = $model->title;
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术传承',
            'url' => 'culture-programs/index'
        ],
        [
            'label' => $model->title
        ]
    ]
];

$this->registerCssFile("@web/css/src/programs.css");
$content=json_decode($model->content);
$topPosts=explode(",",$content[0]);
$section1Posts=explode(",",$content[1]);
$section2Posts=explode(",",$content[2]);
$section3Posts=explode(",",$content[3]);
$section4Posts=explode(",",$content[4]);
?>
<div class="program">
    <h2 class="title"><?= $model->title; ?></h2>
    <p class="subTitle"><?= $model->date; ?></p>
    <div class="excerpt">
        <?= $model->excerpt; ?>
    </div>
    <div class="pSection" style="padding-top: 20px;">
        <ul class="pSectionTopList">
            <?php
                foreach($topPosts as $key=>$tp){
                    $tp=Post::findOne($tp);
                    $url="culture-programs/posts/".$tp->id."?pId=".$model->id;

                    if($key==0){
                        $url="videos/".$tp->id;
                    }
                    //pdf的地址存在bg_image中
                    if($tp->bg_image){
                        $url=$tp->bg_image;
                    }
                    ?>
                    <li class="item">
                        <a href="<?= $url; ?>" target="_blank">
                            <picture class="ratio43 thumbContainer">
                                <source srcset="<?= Helper::getSuffixFile($tp->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $tp->thumb; ?>" >
                            </picture>
                            <div class="info">
                                <div class="icon-wrapper">
                                    <span class="icon icon-program-post-<?= $key; ?>"></span>
                                </div>
                                <h3 class="title ellipsis"><?= $tp->title; ?></h3>
                                <p class="date"><?= $tp->date; ?></p>
                            </div>
                        </a>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst1">标题1</h3>
        <ul class="pSectionList1">
            <?php
                foreach($section1Posts as $s1p){
                    $s1p=Post::findOne($s1p);
                    ?>
                    <li class="item">
                        <a href="culture-programs/posts/<?= $s1p->id; ?>?pId=<?= $model->id; ?>">
                            <picture class="thumbContainer">
                                <source srcset="<?= Helper::getSuffixFile($s1p->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $s1p->thumb; ?>" >
                            </picture>
                            <div class="info">
                                <h3 class="title"><?= $s1p->title; ?></h3>
                            </div>
                        </a>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst2">标题2</h3>
        <ul class="pSectionList2">
            <?php
                foreach($section2Posts as $s2p){
                    $s2p=Post::findOne($s2p);
                    ?>
                    <li class="item">
                        <a href="culture-programs/posts/<?= $s1p->id; ?>?pId=<?= $model->id; ?>">
                            <picture class="thumbContainer">
                                <source srcset="<?= Helper::getSuffixFile($s2p->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $s2p->thumb; ?>" >
                            </picture>
                            <div class="info">
                                <h3 class="title"><?= $s2p->title; ?></h3>
                                <p class="date"><?= $s2p->date; ?></p>
                                <p class="excerpt">
                                    <?= $s2p->excerpt; ?>
                                </p>
                            </div>
                        </a>

                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst3">标题3</h3>
        <ul class="pSectionList3">
            <?php
            foreach($section3Posts as $s3p){
                $s3p=Post::findOne($s3p);
                ?>
                <li class="item">
                    <a href="culture-programs/posts/<?= $s3p->id; ?>?pId=<?= $model->id; ?>">
                        <div class="thumbContainer">
                            <picture class="thumbContainer">
                                <source srcset="<?= Helper::getSuffixFile($s3p->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $s3p->thumb; ?>" >
                            </picture>
                        </div>
                        <div class="info">
                            <h3 class="title ellipsis">
                                <?= $s3p->title; ?>
                            </h3>
                            <p class="date"><?= $s3p->date; ?></p>
                            <p class="excerpt">
                                <?= $s3p->excerpt; ?>
                            </p>
                        </div>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst4">标题4</h3>
        <ul class="pSectionList3 pSectionList4">
            <?php
            foreach($section4Posts as $s4p){
                $s4p=Post::findOne($s4p);
                ?>
                <li class="item">
                    <a href="culture-programs/posts/<?= $s4p->id; ?>?pId=<?= $model->id; ?>">
                        <div class="thumbContainer">
                            <picture>
                                <source srcset="<?= Helper::getSuffixFile($s4p->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $s4p->thumb; ?>" >
                            </picture>
                        </div>
                        <div class="info">
                            <h3 class="title ellipsis">
                                <?= $s4p->title; ?>
                            </h3>
                            <p class="date"><?= $s4p->date; ?></p>
                            <p class="excerpt">
                                <?= $s4p->excerpt; ?>
                            </p>
                        </div>
                    </a>

                </li>
            <?php
            }
            ?>

        </ul>
    </div>

</div>