<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '大学奖学金活动';
?>

    <script>
        var category_id=<?php echo Yii::$app->params["categories"]["award"]; ?>;
    </script>

    <a class="btn btn-success" href="award/create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>名称</th>
            <th>时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <!--<tr>
            <td>xxx</td>
            <td>xxx</td>
            <td>
            <a href="award/update">修改</a>&nbsp;
            <a href="1" class="delete">删除</a>
            </td>
        </tr>-->
        </tbody>
    </table>



<?php
$this->registerJsFile("@web/js/src/awardMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>