<?php
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
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="http://7xqx6h.com1.z0.glb.clouddn.com/5875287525388.pdf" target="_blank">
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
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
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <picture>
                    <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                    <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                </picture>
                <div class="info">
                    <h3 class="title">这里是标题</h3>
                </div>
            </li>
            <li class="item">
                <picture>
                    <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                    <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                </picture>
                <div class="info">
                    <h3 class="title">这里是标题</h3>
                </div>
            </li>
            <li class="item">
                <picture>
                    <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                    <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                </picture>
                <div class="info">
                    <h3 class="title">这里是标题</h3>
                </div>
            </li>
            <li class="item">
                <picture>
                    <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                    <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                </picture>
                <div class="info">
                    <h3 class="title">这里是标题</h3>
                </div>
            </li>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst2">标题2</h3>
        <ul class="pSectionList2">
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <picture>
                        <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                        <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                    </picture>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
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
                <a href="activities/4/154">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            传承文明，发展艺术，美克美家 “艺术·家”企业社会责任项目启动
                        </h3>
                        <p class="excerpt">
                            美克美家“艺术·家”企业社会责任项目在西安正式启动。
                            该项目旨在关注艺术教育发展，通过对青少年文化艺术培养，
                            培育艺术与设计人才...
                        </p>
                    </div>
                </a>
            </li>

            <li class="item">
                <a href="activities/4/154">
                    <div class="info">
                        <h3 class="title ellipsis">
                            传承文明，发展艺术，美克美家 “艺术·家”企业社会责任项目启动
                        </h3>
                        <p class="excerpt">
                            美克美家“艺术·家”企业社会责任项目在西安正式启动。
                            该项目旨在关注艺术教育发展，通过对青少年文化艺术培养，
                            培育艺术与设计人才...
                        </p>
                    </div>
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="activities/4/154">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title ellipsis">
                            传承文明，发展艺术，美克美家 “艺术·家”企业社会责任项目启动
                        </h3>
                        <p class="excerpt">
                            美克美家“艺术·家”企业社会责任项目在西安正式启动。
                            该项目旨在关注艺术教育发展，通过对青少年文化艺术培养，
                            培育艺术与设计人才...
                        </p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="activities/4/154">
                    <div class="info">
                        <h3 class="title ellipsis">
                            传承文明，发展艺术，美克美家 “艺术·家”企业社会责任项目启动
                        </h3>
                        <p class="excerpt">
                            美克美家“艺术·家”企业社会责任项目在西安正式启动。
                            该项目旨在关注艺术教育发展，通过对青少年文化艺术培养，
                            培育艺术与设计人才...
                        </p>
                    </div>
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/14677739190950.jpg">
                        </picture>
                    </div>
                </a>
            </li>
        </ul>
    </div>


    <div class="pSection">
        <h3 class="pSectionTitle pst4">标题4</h3>
        <ul class="pSectionList3 pSectionList4">
            <li class="item">
                <a>
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
            <li class="item">
                <a>
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660-320x.jpg" media="(max-width: 768px)">
                            <img class="thumb" src="http://7xqx6h.com1.z0.glb.clouddn.com/13210163196660.jpg">
                        </picture>
                    </div>
                    <div class="info">
                        <h3 class="title">这里是标题</h3>
                        <p class="date">2010-23-23</p>
                        <p class="excerpt">
                            这里是描述
                        </p>
                    </div>
                </a>

            </li>
        </ul>
    </div>

</div>