<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;

$this->title = '历年活动';
$parentUrl="";
$categoryId=$category->id;
switch($categoryId){
    case 4:
        $parentUrl="room/index";
        break;
    case 7:
        $parentUrl="teacher-train/index";
        break;
    case 11:
        $parentUrl="volunteer/index";
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
            'label' => $category->name,
            'url' => [$parentUrl]
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '历年活动'
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
                        <a href="activities/<?= $r->id; ?>">
                            <div class="date displayNoneInMobile">
                                <p class="top"><?= $year; ?></p>
                                <p class="bottom"><?= $month; ?></p>
                            </div>
                            <div class="thumbContainer">
                                <img class="thumb" src="<?= $r->thumb; ?>">
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