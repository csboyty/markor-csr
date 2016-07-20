<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '艺术•家动态';
?>
    <script>
        var category_id=<?php echo Yii::$app->params["categories"]["artNews"]; ?>;
    </script>

    <a class="btn btn-success" href="news/create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <div class="tableSearchContainer">
        <label style="float: left;line-height: 30px;">首页显示</label>
        <div class="col-md-2">
            <select class="form-control" id="filter">
                <option value="">全部</option>
                <option value="0">否</option>
                <option value="1">是</option>
            </select>
        </div>
        <button id="searchBtn" class="btn btn-default" type="button">搜索</button>
    </div>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>时间</th>
            <th>首页显示</th>
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
$this->registerJsFile("@web/js/src/newsMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>