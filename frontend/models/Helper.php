<?php
/**
 * Created by JetBrains PhpStorm.
 * User: TY
 * Date: 16-6-29
 * Time: 下午2:58
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\models;

use Yii;

class Helper{
    public static function getSuffixFile($url,$suffix=""){
        if($suffix==""){
            $suffix=Yii::$app->params["imageSizes"]["thumbnail"][0]["suffix"];
        }

        $fileInfo=pathinfo($url);
        $extension=$fileInfo["extension"];
        $key=$fileInfo["basename"];
        $filename=$fileInfo["filename"];
        $path=$fileInfo["dirname"];
        $saveName=$path."/".$filename.$suffix.".".$extension;

        return $saveName;

    }
}