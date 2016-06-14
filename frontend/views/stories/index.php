<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;

$this->title = '人物故事';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '人物故事',
        ]
    ]
]
?>

<div class="section">
    <ul class="list3">
        <?php foreach($results as $r){
            $date=$r->date;
            $year=substr($date,0,4);
            $month=substr($date,5);
        ?>
            <li class="item">
                <a href="stories/<?= $r->id; ?>">
                    <div class="date displayNoneInMobile">
                        <p class="top"><?= $year; ?></p>
                        <p class="bottom"><?= $month; ?></p>
                    </div>
                    <div class="thumbContainer">
                        <img class="thumb" src="<?= $r->thumb; ?>">
                    </div>
                    <div class="info">
                        <h2 class="title ellipsis"><?= $r->title; ?></h2>
                        <p class="author"><?= $r->author; ?></p>
                        <p class="excerpt moreEllipsis" data-row="3">
                            <?= $r->excerpt; ?>
                        </p>
                    </div>
                </a>
            </li>

        <?php
        }
        ?>

    </ul>
</div>
<?php echo LinkPager::widget(['pagination' => $pages]); ?>