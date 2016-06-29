<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改----'.(isset($parentCategory)?$parentCategory->name."/":"").$category->name;
?>
<script>
    var category_id=<?php echo $category->id; ?>;
</script>

<form class="form-horizontal" id="myForm" action="post/submit" method="post">
    <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
            <?php
        }
    ?>
    <input type="hidden" value="<?php echo $category->id; ?>" name="category_id">
    <div class="form-group">
        <label class="control-label col-md-2">头像*</label>
        <div class="col-md-10" id="uploadContainer">
            <a href="#" class="btn btn-success" id="uploadBtn">上传</a>
            <p class="help-block">请上传1:1的jpg，png,宽度在400px-600px之间</p>
            <img  id="image"  style="width:100px"
                  src="<?php echo $model->thumb?$model->thumb:'images/app/defaultThumb.png'; ?>"/>
            <input type="hidden" id="imageUrl" name="thumb" value="<?php echo $model->thumb; ?>">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">姓名*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->author; ?>" name="author">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">职务*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->memo; ?>" name="memo">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">内容*</label>
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
    $this->registerJsFile("@web/js/src/speechCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>