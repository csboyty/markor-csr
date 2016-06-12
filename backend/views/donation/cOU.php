<?php
use yii\helpers\Html;
use backend\assets\AppAsset;
$this->title = '新建/修改捐赠小学名单';
?>


    <form class="form-horizontal" id="myForm" action="post/submit" method="post">
        <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
        <?php
        }
        ?>
        <input type="hidden" value="<?php echo Yii::$app->params["categories"]["donation"]; ?>" name="category_id">

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
$this->registerJsFile("@web/js/src/donationListCOU.js",['depends' => [backend\assets\AppAsset::className()]]);
?>