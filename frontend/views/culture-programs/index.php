<?php
use frontend\models\Helper;

$this->title = '艺术传承';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术传承',
        ]
    ]
]
?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/artInherit.jpg" srcset="images/app/pageTop/artInherit@2x.jpg 2x">
    <div class="info">
        <h2 class="title">艺术传承</h2>
        <p class="excerpt">
            美克美家联手湖南大学，与政府及艺术保护和发展相关机构合作，致力于传统文化遗产保护工作，助推传统艺术的发展与传承。
        </p>
    </div>
</div>
<div class="section">
    <ul class="list2 list21">
        <?php
            foreach($results as $r){
                ?>
                <li class="item">
                    <a class="info" href="culture-programs/<?= $r->id; ?>">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $r->thumb; ?>" >
                        </picture>

                        <h3 class="title ellipsis"><?= $r->title; ?></h3>
                        <p class="date"><?= $r->date; ?></p>
                        <p class="excerpt">
                            <?= $r->excerpt; ?>
                        </p>
                    </a>
                </li>
                <?php
            }
        ?>

    </ul>
</div>