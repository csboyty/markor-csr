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
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/5873848794036-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/5873848794036.jpg">
                    </picture>
                    <div class="info">
                        <div class="icon">
                            <span class="icon-program-post-1"></span>
                        </div>
                        <h3 class="title ellipsis">这里是标题这里是标题</h3>
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
                        <h3 class="title ellipsis">这里是标题这里是标题</h3>
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

    <div class="pSection">
        <h3 class="pSectionTitle pst1">标题1</h3>
        <ul class="pSectionList1">
            <li class="item">
                <a href="#">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title"></h3>
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
                        <h3 class="title">这里是标题</h3>
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
                        <h3 class="title">这里是标题</h3>
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
                        <h3 class="title">这里是标题</h3>
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
                        <h3 class="title">这里是标题</h3>
                    </div>
                </a>
            </li>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst2">标题2</h3>
        <ul class="pSectionList2">
            <li class="item">
                <a href="culture-programs/posts/">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是标题
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是标题
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是标题
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是标题
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是标题
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是标题
                        </p>
                    </div>
                </a>

            </li>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst3">标题3</h3>
        <ul class="pSectionList3">
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>
            </li>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst4">标题4</h3>
        <ul class="pSectionList3 pSectionList4">
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a href="culture-programs/posts/#">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            这里是标题
                        </h3>
                        <p class="date">2014-09-09</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
        </ul>
    </div>


</div>