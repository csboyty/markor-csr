<?php

use backend\assets\AppAsset;

$this->title = '设置';

?>


    <form class="form-horizontal" id="myForm" action="setting/submit" method="post">

        <div class="form-group">
            <label for="name" class="control-label col-md-2">资源类型*</label>
            <div class="col-md-8">
                <select name="resources_prefix_type" class="form-control">
                    <?php
                    $values=[
                        [
                            "name"=>"七牛",
                            "value"=>1
                        ],
                        [
                            "name"=>"本地",
                            "value"=>0
                        ]
                    ];
                    foreach($values as $v){
                        ?>

                        <option
                            <?php if(isset($model)&&$model->resources_prefix_type==$v["value"]){
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
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-success form-control">确定</button>
            </div>
        </div>
    </form>

<?php
$this->registerJsFile("@web/js/src/setting.js",['depends' => [backend\assets\AppAsset::className()]]);
?>