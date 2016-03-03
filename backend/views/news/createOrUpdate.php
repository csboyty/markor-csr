<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改艺术•家动态';
?>


<form class="form-horizontal" id="myForm" action="post/submit" method="post">
    <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
            <?php
        }
    ?>
    <input type="hidden" value="<?php echo Yii::$app->params["categories"]["artNews"]; ?>" name="category_id">
    <div class="form-group">
        <label class="control-label col-md-2">封面图*</label>
        <div class="col-md-10" id="uploadContainer">
            <a href="#" class="btn btn-success" id="uploadBtn">上传</a>
            <p class="help-block">请上传500x500的jpg，png</p>
            <img  id="image"  style="width:100px"
                  src="images/app/defaultPeopleImage.jpg"/>
            <input type="hidden" id="imageUrl" name="image">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">背景大图*</label>
        <div class="col-md-10" id="uploadBgContainer">
            <a href="#" class="btn btn-success" id="uploadBgBtn">上传</a>
            <p class="help-block">请上传1920x600的jpg，png</p>
            <img  id="bgImage"  style="width:100px"
                  src="images/app/defaultPeopleImage.jpg"/>
            <input type="hidden" id="bgImageUrl" name="bg_image">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">标题*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->title ?>" name="title">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">摘要*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->excerpt ?>" name="excerpt">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">时间</label>
        <div class="col-md-8">
            <input type="date" class="form-control" value="<?php echo $model->create_at ?>" name="create_at">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">内容*</label>
        <div class="col-md-8">
            <textarea class="form-control"  name="content" rows="3" id="content"><?php echo $model->content ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-8">
            <button type="submit" class="btn btn-success form-control">确定</button>
        </div>
    </div>
</form>

<?php
    $this->registerJsFile("@web/js/src/newsCreateOrUpdate.js",['depends' => [backend\assets\AppAsset::className()]]);
?>