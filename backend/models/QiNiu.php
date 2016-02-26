<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class QiNiu extends Model
{
    public $bucket;
    public $accessKey;
    public $secretKey;

    public function __construct(){
        $this->bucket=Yii::$app->params["qiNiu"]['bucket'];
        $this->accessKey=Yii::$app->params["qiNiu"]['accessKey'];
        $this->secretKey=Yii::$app->params["qiNiu"]['secretKey'];
    }
    public function URLSafeBase64Encode($str) // URLSafeBase64Encode
    {
        $find = array('+', '/');
        $replace = array('-', '_');
        return str_replace($find, $replace, base64_encode($str));
    }

    public function URLSafeBase64Decode($str)
    {
        $find = array('-', '_');
        $replace = array('+', '/');
        return base64_decode(str_replace($find, $replace, $str));
    }

    /**
     * 创建uploadToken时需要返回的值
     * @return mixed|string|void
     */
    public function createReturnBody(){

        //使用专有通道
        $returnBody=array(
            "scope"=>$this->bucket,
            "deadline"=>24*60*60+time(),
            //设置返回的结果
            "returnBody"=>'{"key": $(key), "hash": $(etag), "w": $(imageInfo.width), "h": $(imageInfo.height)}'
        );

        return json_encode($returnBody);
    }

    public function handleImage($path,$sizes){
        $fileInfo=pathinfo($path);
        $extension=$fileInfo["extension"];
        $filename=$fileInfo["filename"];
        $saveName="";
        $suffix="";
        $handle=50;

        foreach($sizes as $value){
            $suffix=$value["suffix"];
            $handle=$value["handle"];
            $saveName=$this->bucket.":".$filename."-".$extension;
        }
    }

}
