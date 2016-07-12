<?php
use frontend\models\Helper;

$this->title = '儿童画征集';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '儿童画征集与产品开发',
            'url' => ['enlightenment/child-draw']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => "儿童画征集"
        ]
    ]
];
?>
<div class="section">
    <?php
        foreach($results as $key=>$value){
            ?>
            <p class="contentText"><?= $key; ?></p>
            <ul class="list1 list1M list12">
                <?php
                    foreach($value as $v){
                        ?>
                        <li class="item">
                            <div class="thumbContainer">
                                <picture>
                                    <source srcset="<?= Helper::getSuffixFile($v->thumb); ?>" media="(max-width: 768px)">
                                    <img class="thumb" src="<?= $v->thumb; ?>" >
                                </picture>
                            </div>
                            <div class="info">
                                <h2 class="title"><?= $v->title; ?></h2>
                                <p class="author"><?= $v->author; ?></p>
                            </div>
                        </li>
                        <?php
                    }
                ?>
            </ul>

            <hr>

            <?php
        }
    ?>
</div>