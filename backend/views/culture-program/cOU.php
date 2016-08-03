<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改艺术传承项目';

$this->registerCssFile("@web/css/lib/date_input.css");
$content=$model->content?json_decode($model->content):"";
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
    <input type="hidden" value="1" name="memo">
    <div class="form-group">
        <label class="control-label col-md-2">封面图*</label>
        <div class="col-md-10" id="uploadContainer">
            <a href="#" class="btn btn-success" id="uploadBtn">上传</a>
            <p class="help-block">请上传4:3的缩略图，jpg或png格式，宽度400px-800px</p>
            <img  id="image"  style="width:100px"
                  src="<?php echo $model->thumb?$model->thumb:'images/app/defaultThumb.png'; ?>"/>
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
        <label  class="control-label col-md-2">摘要*</label>
        <div class="col-md-8">
            <textarea id="excerpt" class="form-control"  name="excerpt" rows="3"><?php echo $model->excerpt; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">日期*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="date" value="<?php echo $model->date; ?>" name="date">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">头部三篇文章</label>
        <div class="col-md-8">
            <input type="text" class="form-control ids" value="<?php echo $content?$content[0]:""; ?>">
            <p class="help-block">视频、成果展示、项目计划，填写文章id，用英文逗号隔开</p>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">栏目1文章</label>
        <div class="col-md-8">
            <input type="text" class="form-control ids" value="<?php echo $content?$content[1]:""; ?>">
            <p class="help-block">5篇，填写文章id，用英文逗号隔开</p>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">栏目2文章</label>
        <div class="col-md-8">
            <input type="text" class="form-control ids" value="<?php echo $content?$content[2]:""; ?>">
            <p class="help-block">6篇，填写文章id，用英文逗号隔开</p>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">栏目3文章</label>
        <div class="col-md-8">
            <input type="text" class="form-control ids" value="<?php echo $content?$content[3]:""; ?>">
            <p class="help-block">4篇，填写文章id，用英文逗号隔开</p>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">栏目4文章</label>
        <div class="col-md-8">
            <input type="text" class="form-control ids" value="<?php echo $content?$content[4]:""; ?>">
            <p class="help-block">4篇，填写文章id，用英文逗号隔开</p>
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
    $this->registerJsFile("@web/js/src/cultureProgramCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>