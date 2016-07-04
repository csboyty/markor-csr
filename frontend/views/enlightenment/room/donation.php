<?php
$this->title=$result->title;
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => "快乐美术教室",
            'url' => "enlightenment/room"
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '捐赠名单'
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>
<div class="section">
    <h2 class="sectionTitle titleDonationList">捐赠名单</h2>
    <div class="post"  style="width: 90%">
        <div class="content">
            <?= $result->content; ?>
        </div>
    </div>
</div>
<!--<div class="section">
    <h2 class="sectionTitle titleDonationList">捐赠名单</h2>
    <div class="post" style="width: 90%">
        <div class="content">
            <p style="text-indent: 8%">从2009年“艺术·家”项目启动至2015年底，美克美家先后在西安、沈阳、
                武汉等21个城市的小学捐赠150间“快乐美术教室”。</p>
            <p>&nbsp;</p>
            <p>成都</p>
            <p>&nbsp;</p>
            <ul style="margin-left: 8%;">
                <li style="margin-right: 4%">都江堰市胥家九年制学校</li>
                <li style="margin-right: 4%">都江堰市天马九年制学校</li>
                <li style="margin-right: 4%">都江堰市青城山学校</li>
                <li style="margin-right: 4%">都江堰市中兴九年制学校</li>
                <li style="margin-right: 4%">都江堰市蒲阳小学金凤校区</li>
                <li style="margin-right: 4%">都江堰市石羊小学</li>
                <li style="margin-right: 4%">都江堰市安顺小学</li>
                <li style="margin-right: 4%">都江堰市聚源小学</li>
                <li style="margin-right: 4%">都江堰市蒲阳小学</li>
                <li style="margin-right: 4%">都江堰市崇义小学</li>
            </ul>
        </div>
    </div>
</div>-->