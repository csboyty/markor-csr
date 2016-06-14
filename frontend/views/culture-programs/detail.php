<?php
$this->title = $model->title;
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术传承',
            'url' => 'culture-program/index'
        ]
    ]
]
?>
<div class="post postProgram">
    <h2 class="title"><?= $model->title; ?></h2>
    <p class="subTitle"><?= $model->date; ?></p>
    <a class="link" href="<?= $model->memo; ?>">访问网站</a>
    <div class="content">
        <?= $model->content; ?>
    </div>
</div>