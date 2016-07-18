<?php
use frontend\models\Helper;

$this->title = '高校奖学金活动';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术教育',
            'url' => ['education/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '高校奖学金活动'
        ]
    ]
]
?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/collegeAward.jpg" srcset="images/app/pageTop/collegeAward@2x.jpg 2x">
    <div class="info">
        <h2 class="title">高校奖学金活动</h2>
        <p class="excerpt">
            美克美家每年向每所合作高校捐赠，资助5-10名优秀的在读大学生
            截止2014年底，美克美家先后和清华大学、同济大学、四川美院、湖南大学以及中国美院五所国内一流的艺术设计学院
            达成奖学金项目战略合作，超过100名优秀大学生获得“艺术·家”奖金
        </p>
    </div>
</div>

<div class="section">
    <ul class="list3 list31">
        <?php
            foreach($results as $key=>$r){
                if($key%2==0){
                    ?>
                    <li class="item">
                        <div class="thumbContainer">
                            <picture>
                                <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $r->thumb; ?>" >
                            </picture>
                        </div>
                        <div class="info">
                            <p class="excerpt">
                                <?= $r->excerpt; ?>
                            </p>
                        </div>
                    </li>
                <?php
                }else{
                    ?>
                    <li class="item">
                       <div class="thumbContainer">
                            <picture>
                                <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                                <img class="thumb" src="<?= $r->thumb; ?>" >
                            </picture>
                        </div>
                        <div class="info">
                            <p class="excerpt">
                                <?= $r->excerpt; ?>
                            </p>
                        </div>
                        
                    </li>
                    <?php
                }
            }
        ?>

    </ul>
</div>