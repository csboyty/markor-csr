<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '实习生风采';
?>
    <script>
        var category_id=20;
    </script>

    <a class="btn btn-success" href="trainee/mien-create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>图像</th>
            <th>姓名</th>
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
$this->registerJsFile("@web/js/src/mienMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>