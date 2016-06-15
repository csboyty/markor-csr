<?php
$this->title = $model->title;
$this->title = '历年活动';
$parentUrl="";
$parentCategoryId=$parentCategory->id;
switch($parentCategoryId){
    case Yii::$app->params["categories"]["room"]:
        $parentUrl="enlightenment/room/index";
        break;
    case Yii::$app->params["categories"]["teacherTrain"]:
        $parentUrl="enlightenment/teacher-train/index";
        break;
    case Yii::$app->params["categories"]["volunteer"]:
        $parentUrl="enlightenment/volunteer/index";
        break;
}
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => $parentCategory->name,
            'url' => [$parentUrl]
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '历年活动',
            'url' => ['activities/'.$category->id]
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