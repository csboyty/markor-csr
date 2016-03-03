<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
$this->title = '美克CSR网站|艺术•家动态';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '关于艺术家',
            'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '艺术•家动态'
            //'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>
这里是艺术家动态
<?php
    print_r($results);
?>
<?php echo LinkPager::widget(['pagination' => $pages]); ?>