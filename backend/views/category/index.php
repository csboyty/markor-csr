<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '分类管理';
?>

    <script>
        var category_id=8;
    </script>

    <a class="btn btn-success" href="category/create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>别名</th>
            <th>父类</th>
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
$this->registerJsFile("@web/js/src/categoryMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>