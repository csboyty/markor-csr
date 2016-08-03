<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改----'.(isset($parentCategory)?$parentCategory->name."/":"").$category->name;

$this->registerCssFile("@web/css/lib/date_input.css");
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
        <label class="control-label col-md-2">缩略图*</label>
        <div class="col-md-10" id="uploadContainer">
            <a href="#" class="btn btn-success" id="uploadBtn">上传</a>
            <p class="help-block">请上传16:9的jpg，png，宽度800px-1000px</p>
            <img  id="image"  style="width:100px"
                  src="<?php echo $model->thumb?$model->thumb:'images/app/defaultBg.png'; ?>"/>
            <input type="hidden" id="imageUrl" name="thumb" value="<?php echo $model->thumb; ?>">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">标题*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->title; ?>" name="title">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-md-2">发布*</label>
        <div class="col-md-8">
            <select name="published" class="form-control">
                <?php
                $values=[
                    [
                        "name"=>"发布",
                        "value"=>1
                    ],
                    [
                        "name"=>"未发布",
                        "value"=>0
                    ]
                ];
                foreach($values as $v){
                    ?>

                    <option
                        <?php if(isset($model)&&$model->published==$v["value"]){
                            echo "selected";
                        } ?>
                        value="<?php echo $v["value"]; ?>"><?php echo $v["name"]; ?>
                    </option>

                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">日期*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="date" value="<?php echo $model->date; ?>" name="date">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">视频地址*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo Html::encode($model->memo); ?>" name="memo">
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
    $this->registerJsFile("@web/js/src/videoCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>