<?php

$this->title = '快乐美术教室';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => "快乐美术教室"
        ]
    ]
]

?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/artRoom.jpg" srcset="images/app/pageTop/artRoom@2x.jpg">
    <div class="info">
        <h2 class="title">快乐美术教室</h2>
        <p class="excerpt">
            孩子们的美术课，经常在简陋的教室中度过
            我们用便利的电教设备、美术教材、图书、光盘全面配置独立的美术教室，为孩子们创造艺术空间
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
                        <a href="activities/<?= $ar->id; ?>">
                            <div class="thumbContainer">
                                <img class="thumb" src="<?= $ar->thumb; ?>">
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
    <a class="more" href="activities/index?category_id=<?= Yii::$app->params["categories"]["activityRoom"]; ?>">更多</a>
</div>

<div class="section bgf4f4f4">
    <h2 class="sectionTitle titleDonationGoods">捐赠</h2>
    <p class="contentText">
        为学校捐赠了包括多媒体投影仪和DVD机等在内的艺术教育设备
        艺术普及类图书和光盘，美术课堂所需石膏像、画板工具等等
        作为传统学校艺术教育的补充
    </p>
    <table class="contentTable">
        <tr>
            <td>
                <p class="icon"><span class="icon-video-divice"></span></p><br>放映设备
            </td>
            <td>
                <p class="icon"><span class="icon-book"></span></p><br>图书
            </td>
            <td>
                <p class="icon"><span class="icon-light-disk"></span></p><br>光盘
            </td>
            <td>
                <p class="icon"><span class="icon-plaster-model"></span></p><br>石膏像
            </td>
            <td>
                <p class="icon"><span class="icon-draw-tool"></span></p><br>画图工具
            </td>
        </tr>
    </table>
</div>
<div class="section">
    <?php
        foreach($donationResults as $dr){
            ?>

            <a href="enlightenment/room/donation/<?= $dr->id; ?>"
               style="width: 70%;text-align: center;color: #808080;display: block;margin: auto">
                <p style="font-size: 18px;margin-bottom: 15px;">捐赠小学名单></p>
                <p>
                    从2009年“艺术·家”项目启动至2015年底
                    美克美家先后在西安、沈阳、武汉等21个城市的小学捐赠150间“快乐美术教室”
                </p>
            </a>

            <?php
        }
    ?>

</div>
