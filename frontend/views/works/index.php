<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use frontend\models\Helper;

$this->title = $category->name;
$parentUrl="";
$pPUrl="";
$pPName="";
if($category->id==Yii::$app->params["categories"]["resultCollegeStudent"]){
    $pPName="艺术教育";
    $pPUrl="education/index";
    $this->params=[
        "breadcrumbs"=>[
            [
                'label' => $pPName,
                'url' => [$pPUrl]
                //'template' => "<li><b>{link}</b></li>\n", // template for this link only
            ],
            [
                'label' => $category->name
                //'template' => "<li><b>{link}</b></li>\n", // template for this link only
            ]
        ]
    ];
}else{
    $parentCategoryId=$parentCategory->id;
    switch($parentCategoryId){
        case Yii::$app->params["categories"]["teacherTrain"]:
            $parentUrl="enlightenment/teacher-train/index";
            $pPName="艺术启蒙";
            $pPUrl="enlightenment/index";
            break;
        case Yii::$app->params["categories"]["childDraw"]:
            $parentUrl="enlightenment/child-draw/index";
            $pPName="艺术启蒙";
            $pPUrl="enlightenment/index";
            break;
    }
    $this->params=[
        "breadcrumbs"=>[
            [
                'label' => $pPName,
                'url' => [$pPUrl]
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
    ];
}

?>

    <div class="section">
        <ul class="list1">
            <?php
                foreach($results as $r){
                    ?>
                    <li class="item bdCCC">
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
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>


<?php echo LinkPager::widget(['pagination' => $pages]); ?>