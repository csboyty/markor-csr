<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改艺术家荣誉';
?>


<form class="form-horizontal" id="myForm" action="post/submit" method="post">
    <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
            <?php
        }
    ?>
    <input type="hidden" value="<?php echo Yii::$app->params["categories"]["artHonor"]; ?>" name="category_id">
    <div class="form-group">
        <label class="control-label col-md-2">封面图*</label>
        <div class="col-md-10" id="uploadContainer">
            <a href="#" class="btn btn-success" id="uploadBtn">上传</a>
            <p class="help-block">请上传500x500的jpg，png</p>
            <img  id="image"  style="width:100px"
                  src="<?php echo $model->thumb?$model->thumb:'images/app/defaultThumb.png'; ?>"/>
            <input type="hidden" id="imageUrl" name="thumb" value="<?php echo $model->thumb; ?>">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">描述*</label>
        <div class="col-md-8">
            <textarea class="form-control"  name="excerpt" rows="3"><?php echo $model->excerpt; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-8">
            <button type="submit" class="btn btn-success form-control">确定</button>
        </div>
    </div>
</form>

<?php
    $this->registerJsFile("@web/js/src/honorCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>