<?php
$this->title="登陆";
?>

<form class="pCenter" id="myForm" method="post" action="site/login" name="login_user_form">
    <span class="loginIcon">登陆图标</span>
    <h1 class="logo">美克美家CSR</h1>
    <div class="row">
        <label class="ctrlLabel">邮箱</label>
        <input class="ctrlInput icon1 bgLc" type="text" name="email">
    </div>
    <div class="row">
        <label  class="ctrlLabel">密码</label>
        <input id="password" class="ctrlInput icon2 bgLc" type="password" name="password">
    </div>
    <div class="row">
        <input type="submit" class="ctrlBtn" value="登陆">
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