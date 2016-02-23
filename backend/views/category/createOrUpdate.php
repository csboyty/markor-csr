<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改分类';
?>


<form class="form-horizontal" id="myForm" action="category/submit" method="post">
    <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
            <?php
        }
    ?>
    <div class="form-group">
        <label for="name" class="control-label col-md-2">名称*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->name ?>" name="name">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">别名*</label>
        <div class="col-md-8">
            <input type="text" class="form-control" value="<?php echo $model->slug ?>" name="slug">
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-md-2">父类*</label>
        <div class="col-md-8">
            <select name="parent_id" class="form-control">
                <option value="0">无</option>
                <?php
                foreach($categories as $en){
                    ?>

                    <option
                        <?php if($model->parent_id&&$model->parent_id==$en["id"]){
                            echo "selected";
                        } ?>
                        value="<?php echo $en["id"]; ?>"><?php echo $en["name"]; ?>
                    </option>

                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-8">
            <button type="submit" class="btn btn-success form-control">确定</button>
        </div>
    </div>
</form>

<?php
    $this->registerJsFile("@web/js/src/categoryCreateOrUpdate.js",['depends' => [backend\assets\AppAsset::className()]]);
?>