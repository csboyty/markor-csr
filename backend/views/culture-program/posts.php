<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '艺术传承->项目文章';
?>
    <script>
        var category_id=<?php echo Yii::$app->params["categories"]["cultureProgram"]; ?>;
    </script>

    <div class="input-group tableSearchContainer col-md-6">
        <input type="text" id="searchContent" class="form-control" placeholder="ID/标题">
        <span class="input-group-btn">
            <button id="searchBtn" class="btn btn-default" type="button">搜索</button>
        </span>
    </div>
    <a class="btn btn-success" href="culture-program/posts-create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>标题</th>
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
$this->registerJsFile("@web/js/src/cultureProgramPostsMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>