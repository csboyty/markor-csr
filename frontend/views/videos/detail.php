<?php
$this->title=$model->title;

if($category->id==Yii::$app->params["categories"]["video"]){
    $this->params=[
        "breadcrumbs"=>[
            [
                'label' => "视频",
                'url' => ['about/index']
                //'template' => "<li><b>{link}</b></li>\n", // template for this link only
            ]
        ]
    ];
}else{
    $this->params=[
        "breadcrumbs"=>[
            [
                'label' => '艺术启蒙',
                'url' => ["enlightenment/index"]
            ],
            [
                'label' => "儿童画征集与产品开发",
                'url' => ['enlightenment/child-draw/index']
                //'template' => "<li><b>{link}</b></li>\n", // template for this link only
            ]
        ]
    ];
}
?>

<div class="youkuBox">
    <?= $model->memo; ?>
</div>
