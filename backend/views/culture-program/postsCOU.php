<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改艺术传承项目文章';

$this->registerCssFile("@web/css/lib/date_input.css");
?>


    <form class="form-horizontal" id="myForm" action="post/submit" method="post">
        <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
        <?php
        }
        ?>
        <input type="hidden" value="<?php echo Yii::$app->params["categories"]["cultureProgram"]; ?>" name="category_id">
        <input type="hidden" value="2" name="memo">
        <div class="form-group">
            <label class="control-label col-md-2">封面图*</label>
            <div class="col-md-10" id="uploadContainer">
                <a href="#" class="btn btn-success" id="uploadBtn">上传</a>
                <p class="help-block">请上传4:3的jpg，png，宽度400px-800px</p>
                <img  id="image"  style="width:100px"
                      src="<?php echo $model->thumb?$model->thumb:'images/app/defaultThumb.png'; ?>"/>
                <input type="hidden" id="imageUrl" name="thumb" value="<?php echo $model->thumb; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">附件pdf</label>
            <div class="col-md-10" id="uploadFileContainer">
                <a href="#" class="btn btn-success" id="uploadFileBtn">上传</a>
                <span  id="filename"><?php echo $model->bg_image?$model->bg_image:''; ?></span>
                <input type="hidden" id="fileUrl" name="bg_image" value="<?php echo $model->bg_image; ?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">标题*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" value="<?php echo $model->title; ?>" name="title">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">摘要*</label>
            <div class="col-md-8">
                <textarea class="form-control"  name="excerpt" rows="3"><?php echo $model->excerpt; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">日期*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="date" value="<?php echo $model->date; ?>" name="date">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">内容*</label>
            <div class="col-md-8">
                <textarea id="content" class="form-control"  name="content" rows="3"><?php echo $model->content; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-success form-control">确定</button>
            </div>
        </div>
    </form>

<?php
$this->registerJsFile("@web/js/lib/jquery.date_input.js",['depends' => [backend\assets\AppAsset::className()]]);
$this->registerJsFile("@web/js/src/cultureProgramPostsCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>