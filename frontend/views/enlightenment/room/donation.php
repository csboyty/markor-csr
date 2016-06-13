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
    <div class="post">
        <div class="content">
            <?= $result->content; ?>
        </div>
    </div>
</div>