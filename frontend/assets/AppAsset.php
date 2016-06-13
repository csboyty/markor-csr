<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        'css/src/icons.css',
        'css/src/lists.css',
        'css/src/main.css',
        'css/src/mediaQuery.css',
    ];
    public $js = [
        'js/lib/jquery-1.11.1.min.js',
        'js/lib/jquery.ellipsis.js',
        'js/src/common.js'
    ];
    public $depends = [
        //'yii\web\JqueryAsset',
    ];
}
