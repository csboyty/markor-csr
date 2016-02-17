<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/lib/jquery.dataTables.css',
        'css/lib/jquery.toastmessage.css',
        'css/src/main.css',
    ];
    public $js = [
        "js/lib/jquery.dataTables.min.js",
        "js/lib/jquery.toastmessage.js",
        "js/lib/jquery.form.js",
        "js/lib/jquery.validate.min.js",
        "js/lib/plupload.full.min.js",
        "js/lib/qiniu.js",
        "js/lib/tinymce.min.js",
        "js/src/config.js",
        "js/src/functions.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
