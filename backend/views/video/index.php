<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = "视频管理";

?>
    <script>
        var category_id=25;
    </script>


    <a class="btn btn-success" href="video/create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>图片</th>
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
$this->registerJsFile("@web/js/src/videoMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>