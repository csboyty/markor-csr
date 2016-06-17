<?php

/* @var $this yii\web\View */

$this->title = "视频";
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => "视频"
            //'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>
<div class="section">
    <ul class="list5">
        <?php
            foreach($results as $r){
                ?>
                <li class="item">
                    <a href="videos/<?= $r->id; ?>">
                        <div class="thumbContainer">
                            <img class="thumb" src="<?= $r->thumb; ?>">
                            <p class="icon">
                                <span class="icon-play"></span>
                            </p>
                        </div>
                        <p class="text"><?= $r->title; ?></p>
                        <p class="text"><?= $r->date; ?></p>
                    </a>
                </li>
                <?php
            }
        ?>
    </ul>
</div>

