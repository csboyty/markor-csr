<?php

/* @var $this yii\web\View */

$this->title = '艺术教育';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术教育'
            //'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/artEducation.jpg" srcset="images/app/pageTop/artEducation@2x.jpg">
    <div class="info">
        <h2 class="title">艺术教育</h2>
        <p class="excerpt">
            艺术蕴含着视觉之美、秩序之美、礼仪之美、和谐之美，艺术无处不在
            我们希望通过对高等艺术教育的支持援助大学生在艺术领域继续探索和深造，启程美丽人生
            美克美家每年向每所合作高校捐赠，资助5-10名优秀的在读大学生
        </p>
    </div>
</div>
<div class="section">
    <h2 class="sectionTitle titleScholarship">高校奖学金活动</h2>
    <img src="images/app/scholarship.jpg" srcset="images/app/scholarship@2x.jpg">
    <p class="contentText">
        美克美家每年向每所合作高校捐赠，资助5-10名优秀的在读大学生
        与五所国内艺术设计学院达成奖学金项目战略合作，超过100名优秀大学生获得“艺术·家”奖学金
    </p>
    <a href="education/awards" class="more">更多</a>
</div>

<div class="section bgf4f4f4">
    <h2 class="sectionTitle titleCollegeWork">大学生作品</h2>
    <ul class="list1">
        <?php
            foreach($collegeResults as $cr){
                ?>
                <li class="item">
                    <div class="thumbContainer">
                        <img class="thumb" src="<?= $cr->thumb; ?>">
                    </div>
                    <div class="info">
                        <h2 class="title ellipsis"><a href="works/<?= $cr->id; ?>/<?= $cr->category_id; ?>"><?= $cr->title; ?></a></h2>
                        <p class="author">杨媛媛</p>
                        <p class="excerpt moreEllipsis" data-row="3">
                            展览当日，几十平米的“新通道”项目展区直观呈现了在保护侗锦、
                            及传统手工艺等国家级非物质文化遗产过程中所取得的成果，
                            一件件作品将侗族传统文化艺术元素融入现代生活中，创新的形式与内容将人们引入到一个充满艺术与传统的世界中。
                        </p>
                    </div>
                </li>
                <?php
            }
        ?>

    </ul>

    <a href="works/<?= Yii::$app->params["categories"]["resultCollegeStudent"] ?>" class="more">更多</a>
</div>

<div class="section">
    <h2 class="sectionTitle titleTraineeRecruit">实习生招聘</h2>
    <ul class="list1 list1M list1M1">
        <li class="item">
            <img class="thumb" src="data/square/1.jpg">
        </li>
        <li class="item">
            <img class="thumb" src="data/square/1.jpg">
        </li>
        <li class="item">
            <img class="thumb" src="data/square/1.jpg">
        </li>
    </ul>

    <p class="contentText">
        美克美家为大学生提供与创意设计相关的社会实践机会
        招收毕业生进行人力资源培养和储备，以满足美克美家快速、持续发展对各类人才的需求
    </p>
    <a href="education/trainee" class="more">更多</a>
</div>


