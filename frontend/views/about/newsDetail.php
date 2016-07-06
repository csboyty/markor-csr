<?php
$this->title = $model->title;
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '关于艺术·家',
            'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '艺术·家动态',
            'url' => ['about/news']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>

<div class="post">
    <h2 class="title"><?= $model->title; ?></h2>
    <p class="subTitle"><?= $model->date; ?></p>
    <div class="content">
        <?= $model->content; ?>
    </div>
</div>