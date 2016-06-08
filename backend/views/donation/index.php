<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '捐赠小学名单';
?>
    <script>
        var category_id=<?php echo Yii::$app->params["categories"]["donation"]; ?>;
    </script>

    <a class="btn btn-success" href="donation/create">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>ID</th>
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
$this->registerJsFile("@web/js/src/donationListMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>