<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title ='新建/修改实习生招聘';
?>


    <form class="form-horizontal" id="myForm" action="recruit/submit" method="post">
        <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
        <?php
        }
        ?>
        <div class="form-group">
            <label  class="control-label col-md-2">岗位*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" value="<?php echo $model->job; ?>" name="job">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">岗位要求*</label>
            <div class="col-md-8">
                <textarea class="form-control" rows="3" name="job_require"><?php echo $model->job_require; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">实习要求*</label>
            <div class="col-md-8">
                <textarea class="form-control"  name="internship_require" rows="3"><?php echo $model->internship_require; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">地点*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" value="<?php echo $model->address; ?>" name="address">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">日期*</label>
            <div class="col-md-8">
                <input type="date" class="form-control" value="<?php echo $model->date; ?>" name="date">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-success form-control">确定</button>
            </div>
        </div>
    </form>

<?php
$this->registerJsFile("@web/js/src/recruitCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>