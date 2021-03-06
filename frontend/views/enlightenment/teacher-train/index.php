<?php
use frontend\models\Helper;

$this->title = '教师培训';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => "教师培训"
        ]
    ]
]

?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/teacherTrain.jpg" srcset="images/app/pageTop/teacherTrain@2x.jpg 2x">
    <div class="info">
        <h2 class="title">教师培训</h2>
        <p class="excerpt">
            通过对受捐小学的骨干美术教师进行培训，提升受捐物资的利用率，帮助受捐小学学生接受到更加专业的美育教育。进一步完善“艺术·家”项目的支教体系、实现从硬件支持到软件支持的升级。
        </p>
    </div>
</div>

<div class="section">
    <h2 class="sectionTitle titleActivity">历年活动</h2>
    <ul class="list1 list12">
        <?php
        foreach($activityResults as $ar){
            ?>
            <li class="item">
                <a href="activities/<?= $ar->category_id; ?>/<?= $ar->id; ?>">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($ar->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $ar->thumb; ?>" >
                        </picture>
                    </div>

                    <div class="info">

                        <h2 class="title"><?= $ar->title; ?></h2>
                        <p class="author"><?= $ar->author; ?></p>
                        <p class="excerpt moreEllipsis" data-row="3">
                            <?= $ar->excerpt; ?>
                        </p>
                    </div>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
    <a class="more" href="activities/<?= Yii::$app->params["categories"]["activityTeacherTrain"]; ?>">更多</a>
</div>

<div class="section bgf4f4f4">
    <h2 class="sectionTitle titleTeacherSpeech">教师感言</h2>
    <?php
        foreach($speechResults as $sr){
            ?>
            <picture>
                <source srcset="<?= Helper::getSuffixFile($sr->thumb); ?>" media="(max-width: 768px)">
                <img class="circle pCenter" style="width: 100px;" src="<?= $sr->thumb; ?>" >
            </picture>
            <p class="contentText author"><?= $sr->author; ?></p>
            <p class="contentText memo"><?=$sr->memo; ?></p>
            <p class="contentText hasQuotation">
                <?= $sr->excerpt; ?>
            </p>
            <?php
        }
    ?>

    <a class="more" href="speech/<?= Yii::$app->params["categories"]["speechTeacherTrain"]; ?>">更多</a>
</div>

<div class="section">
    <h2 class="sectionTitle titleTeacherWorks">教师作品</h2>
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
            </li>
        <?php
        }
        ?>
    </ul>
    <a class="more" href="works/<?= Yii::$app->params["categories"]["resultTeacherTrain"]; ?>">更多</a>
</div>

