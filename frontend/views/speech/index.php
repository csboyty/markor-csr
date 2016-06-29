<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use frontend\models\Helper;

$this->title = $category->name;
$parentUrl="";
$pPUrl="";
$pPName="";
$parentCategoryId=$parentCategory->id;
switch($parentCategoryId){
    case Yii::$app->params["categories"]["teacherTrain"]:
        $parentUrl="enlightenment/teacher-train/index";
        $pPName="艺术启蒙";
        $pPUrl="enlightenment/index";
        break;
    case Yii::$app->params["categories"]["volunteer"]:
        $parentUrl="enlightenment/volunteer/index";
        $pPName="艺术启蒙";
        $pPUrl="enlightenment/index";
        break;
    case Yii::$app->params["categories"]["trainee"]:
        $parentUrl="education/trainee/index";
        $pPName="艺术教育";
        $pPUrl="education/index";
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
]
?>

    <div class="section">
        <ul class="list3 list32">
            <?php
                foreach($results as $r){
                    ?>
                    <li class="item">
                        <div class="thumbContainer">

                            <picture>
                                <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $r->thumb; ?>" >
                            </picture>
                        </div>
                        <div class="info">
                            <h2 class="title ellipsis"><?= $r->author; ?></h2>
                            <p class="author"><?= $r->memo; ?></p>
                            <p class="excerpt hasQuotation">
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