<?php
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
            <ul class="list2">
                <?php
                    foreach($value as $v){
                        ?>
                        <li class="item">
                            <img class="thumb" src="<?= $v->thumb; ?>">
                            <h3 class="title titleNoBd"><?= $v->title; ?></h3>
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