<?php
use frontend\models\Helper;

$this->title = '实习生';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术教育',
            'url' => ['education/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '实习生'
        ]
    ]
]


?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/traineeRecruit.jpg" srcset="images/app/pageTop/traineeRecruit@2x.jpg">
    <div class="info">
        <h2 class="title">实习生</h2>
        <p class="excerpt">
            美克美家“艺术·家”大学生实习计划，作为奖学金项目的延伸
            美克美家通过为大学生提供与创意、设计以及艺术相关的社会实践机会
            该项目招收专业型应届大学毕业生进入人力资源培养和储备，以满足美克美家快速、持续发展对各类人才的需求
        </p>
    </div>
</div>
<div class="section">
    <h2 class="sectionTitle titleTraineePlan">实习生计划</h2>
    <table class="contentTable displayNoneInMobile">
        <tr>
            <td>
                为大学生提供与创意、设计以及艺术相关的社会<br>
                实践机会招收应届大学毕业生进行人力资源培养和储备<br>
                以满足美克美家快速、持续发展对各类人才的需求
                <br><br>
                打造毕业生成长平台
            </td>
            <td>
                倡导大学生以爱心大使的身份参与小学艺术教育活动<br>
                与受助小学的师生们一同分享最新鲜的艺术知识<br>
                拓展丰富新颖的教育形式
                <br><br>
                爱心大使深入支教课堂
            </td>
        </tr>
    </table>
    <p class="contentText displayInMobile">
        为大学生提供与创意、设计以及艺术相关的社会<br>
        实践机会招收应届大学毕业生进行人力资源培养和储备<br>
        以满足美克美家快速、持续发展对各类人才的需求
        <br><br>
        打造毕业生成长平台
        <br><br>
        倡导大学生以爱心大使的身份参与小学艺术教育活动<br>
        与受助小学的师生们一同分享最新鲜的艺术知识<br>
        拓展丰富新颖的教育形式
        <br><br>
        爱心大使深入支教课堂
    </p>
</div>
<div class="section">
    <h2 class="sectionTitle titleTraineeSpeech">实习生感言</h2>
    <ul class="list2">
        <?php
            foreach($speechResults as $sr){
                ?>
                <li class="item">
                    <picture>
                        <source srcset="<?= Helper::getSuffixFile($sr->thumb); ?>" media="(max-width: 768px)">
                        <img class="thumb mB20 circle" src="<?= $sr->thumb; ?>" >
                    </picture>
                    <div class="info">
                        <p class="tCenter">姓名：<?= $sr->author; ?></p>
                        <!--<p class="tCenter">专业：四川美院视觉传达</p>-->
                        <p class="tCenter">岗位：<?= $sr->memo; ?></p>
                    </div>
                </li>
                <?php
            }
        ?>
    </ul>
    <a href="speech/<?= Yii::$app->params["categories"]["speechTrainee"] ?>" class="more">更多</a>
</div>

<div class="section">
    <h2 class="sectionTitle titleTraineeRecruit">实习生招聘</h2>
    <ul class="list4">
        <?php
            foreach($recruitResults as $rr){
                $date=$rr->date;
                $year=substr($date,0,4);
                $month=substr($date,5);
                ?>
                <li class="item">
                    <div class="leftCorner">
                        <span class="arrow"></span>
                        <p class="text"><?= $year; ?><br><?= $month; ?></p>
                    </div>
                    <table cellspacing="0">
                        <tr>
                            <td>实习岗位</td>
                            <td><?= $rr->job; ?></td>
                        </tr>
                        <tr>
                            <td>职位要求</td>
                            <td><?= $rr->job_require; ?></td>
                        </tr>
                        <tr>
                            <td>实习要求</td>
                            <td><?= $rr->internship_require; ?></td>
                        </tr>
                        <tr>
                            <td>实习地点</td>
                            <td><?= $rr->address; ?></td>
                        </tr>
                    </table>
                </li>
                <?php
            }
        ?>

    </ul>
    <a href="education/trainee/recruits" class="more">更多</a>
</div>
