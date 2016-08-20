<?php
$this->title = $model->title;
?>

<div class="post">
    <h2 class="title"><?= $model->title; ?></h2>
    <p class="subTitle"><?= $model->date; ?></p>
    <div class="content">
        <?= $model->content; ?>
    </div>
</div>