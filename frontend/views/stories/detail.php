<?php
$this->title = $model->title;
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '人物故事',
            'url' => ['stories/index']
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