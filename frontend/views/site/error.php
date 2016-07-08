<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        抱歉，您查看的这个页面出了点小问题，我们会尽快修复。
    </p>
    <p>
        返回<a href="<?php echo Yii::$app->homeUrl; ?>">首页</a>看看其他页面。
    </p>
</div>
