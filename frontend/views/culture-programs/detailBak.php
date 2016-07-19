<?php
use frontend\models\Helper;

$this->title = $model->title;
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术传承',
            'url' => 'culture-programs/index'
        ]
    ]
];

$this->registerCssFile("@web/css/src/programs.css");
?>
<div class="program">
    <h2 class="title"><?= $model->title; ?></h2>
    <p class="subTitle"><?= $model->date; ?></p>
    <div class="excerpt">
        <?= $model->excerpt; ?>
    </div>
    <div class="pSection" style="padding-top: 20px;">
        <ul class="pSectionTopList">
            <li class="item">
                <a href="#">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <div class="icon">
                            <span class="icon-program-post-1"></span>
                        </div>
                        <h3 class="title ellipsis">这里是标题</h3>
                        <p class="date">2019-09-09</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <div class="icon">
                            <span class="icon-program-post-2"></span>
                        </div>
                        <h3 class="title ellipsis">这里是标题</h3>
                        <p class="date">2019-09-09</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <div class="icon">
                            <span class="icon-program-post-3"></span>
                        </div>
                        <h3 class="title ellipsis">这里是标题</h3>
                        <p class="date">2019-09-09</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

</div>