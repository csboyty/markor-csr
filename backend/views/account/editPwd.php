<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '修改密码';
?>


    <form class="form-horizontal" id="myForm" action="account/edit-pwd" method="post">
        <div class="form-group">
            <label for="name" class="control-label col-md-2">请输入新密码*</label>
            <div class="col-md-8">
                <input type="password" class="form-control" name="password" id="password">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">请再次确认新密码*</label>
            <div class="col-md-8">
                <input type="password" class="form-control" name="newPwd">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-success form-control">确定</button>
            </div>
        </div>
    </form>

<?php
$this->registerJsFile("@web/js/src/editPwd.js",['depends' => [backend\assets\AppAsset::className()]]);
?>