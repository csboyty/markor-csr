<?php
/**
 * Created by JetBrains PhpStorm.
 * User: TY
 * Date: 16-6-13
 * Time: 上午11:19
 * To change this template use File | Settings | File Templates.
 */
use frontend\models\Helper;

$this->title = '艺术•家荣誉';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '关于艺术•家',
            'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => "艺术•家荣誉"
        ]
    ]
]
?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/honor.jpg" srcset="images/app/pageTop/honor@2x.jpg">
    <div class="info">
        <h2 class="title">艺术·家荣誉</h2>
        <p class="excerpt">
            因为矢志不渝的坚持和耕耘，美克美家“艺术·家”广受各界赞誉，囊括海内外多个公益、设计奖项
        </p>
    </div>
</div>

<div class="section">
    <h2 class="sectionTitle titleArtHonor">荣誉奖项</h2>
    <ul class="list3 list31">
        <?php
            foreach($results as $r){
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

        ?>

    </ul>
</div>
