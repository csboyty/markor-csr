<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = (isset($parentCategory)?$parentCategory->name."/":"").$category->name;

?>
    <script>
        var category_id=<?php echo $category->id; ?>;
    </script>


    <a class="btn btn-success" href="video/create?category_id=<?php echo $category->id; ?>">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <div class="tableSearchContainer">
        <label>发布</label>
        <div class="col">
            <select class="form-control" id="filter">
                <option value="">全部</option>
                <option value="1">发布</option>
                <option value="0">未发布</option>
            </select>
        </div>
        <button id="searchBtn" class="btn btn-default" type="button">搜索</button>
    </div>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>图片</th>
            <th>名称</th>
            <th>时间</th>
            <th>发布</th>
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