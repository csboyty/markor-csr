<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '艺术家荣誉';
?>

    <script>
        var category_id=<?php echo Yii::$app->params["categories"]["artHonor"]; ?>;
    </script>

    <a class="btn btn-success" href="honor/create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>图片</th>
            <th>内容</th>
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
$this->registerJsFile("@web/js/src/honorMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>