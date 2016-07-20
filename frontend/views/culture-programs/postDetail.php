<?php
$this->title = $model->title;
$this->params=[
    "breadcrumbs"=>[
        "breadcrumbs"=>[
            [
                'label' => '艺术传承',
                'url' => 'culture-programs/index'
            ],
            [
                'label' => $pModel->title,
                'url' => 'culture-programs/'.$pModel->id
            ]
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