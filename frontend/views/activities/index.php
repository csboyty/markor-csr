<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use frontend\models\Helper;

$this->title = $category->name;
$parentUrl="";
$parentCategoryId=$parentCategory->id;
switch($parentCategoryId){
    case Yii::$app->params["categories"]["room"]:
        $parentUrl="enlightenment/room/index";
        break;
    case Yii::$app->params["categories"]["teacherTrain"]:
        $parentUrl="enlightenment/teacher-train/index";
        break;
    case Yii::$app->params["categories"]["volunteer"]:
        $parentUrl="enlightenment/volunteer/index";
        break;
}
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => $parentCategory->name,
            'url' => [$parentUrl]
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => $category->name
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>

    <div class="section">
        <ul class="list3">
            <?php
                foreach($results as $r){
                    $date=$r->date;
                    $year=substr($date,0,4);
                    $month=substr($date,5);
                    ?>
                    <li class="item">
                        <a href="activities/<?= $r->category_id; ?>/<?= $r->id; ?>">
                            <div class="date displayNoneInMobile">
                                <p class="top"><?= $year; ?></p>
                                <p class="bottom"><?= $month; ?></p>
                            </div>
                            <div class="thumbContainer">
                                <picture>
                                    <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                                    <img class="thumb" src="<?= $r->thumb; ?>" >
                                </picture>
                            </div>
                            <div class="info">
                                <h2 class="title ellipsis"><?= $r->title; ?></h2>
                                <p class="author"><?= $r->author; ?></p>
                                <p class="excerpt moreEllipsis" data-row="3">
                                    <?= $r->excerpt; ?>
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>


<?php echo LinkPager::widget(['pagination' => $pages]); ?>