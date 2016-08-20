<?php
$this->title="登录";
?>

<form class="pCenter" id="myForm" method="post" action="site/login" name="login_user_form">
    <span class="loginIcon">登录图标</span>
    <h1 class="logo">美克美家CSR</h1>
    <div class="row">
        <input class="ctrlInput" type="text" name="email" placeholder="用户名／邮箱">
    </div>
    <div class="row">
        <input id="password" class="ctrlInput" type="password" name="password" placeholder="密码">
    </div>
    <div class="row">
        <input type="submit" class="ctrlBtn" value="登录">
    </div>

    <?php
        if($model->getErrors("password")[0]=="loginError"){
            ?>
            <label class="error">用户名或者密码错误</label>
            <?php
        }
    ?>

</form>

<?php
    $this->registerJsFile("@web/js/src/login.js",['depends' => [app\assets\LoginAsset::className()]]);
?>