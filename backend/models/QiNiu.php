<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use linslin\yii2\curl;
use common\models\Setting;
use common\models\ToDownload;

/**
 * LoginForm is the model behind the login form.
 */
class QiNiu extends Model
{
    public $bucket;
    public $accessKey;
    public $secretKey;
    public $handleHost;
    public $handleUrl;
    public $manageHost;
    public $listFileUrl;
    public $bucketDomain;

    public function __construct(){
        $this->bucket=Yii::$app->params["qiNiu"]['bucket'];
        $this->accessKey=Yii::$app->params["qiNiu"]['accessKey'];
        $this->secretKey=Yii::$app->params["qiNiu"]['secretKey'];
        $this->handleHost=Yii::$app->params["qiNiu"]['handleHost'];
        $this->handleUrl=Yii::$app->params["qiNiu"]['handleUrl'];
        $this->manageHost=Yii::$app->params["qiNiu"]['manageHost'];
        $this->listFileUrl=Yii::$app->params["qiNiu"]['listFileUrl'];
        $this->bucketDomain=Yii::$app->params["qiNiu"]['bucketDomain'];
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


    /**
     * 处理策略
     * @param $urlString
     * @param $body
     * @param null $contentType
     * @return string
     */
    public function createAccessToken($urlString,$body,$contentType=null){
        $url = parse_url($urlString);
        $data = '';
        if (array_key_exists('path', $url)) {
            $data = $url['path'];
        }
        if (array_key_exists('query', $url)) {
            $data .= '?' . $url['query'];
        }

        $data .= "\n";

        if ($body !== null && $contentType === 'application/x-www-form-urlencoded') {
            $data .= $body;
        }

        $sign=hash_hmac('sha1', $data, $this->secretKey, true);
        $encodedSign=$this->URLSafeBase64Encode($sign);
        $accessToken = $this->accessKey.":".$encodedSign;
        return $accessToken;
    }

    /**
     * 图片处理接口
     * @param $path
     * @param $sizes
     */
    public function handleImage($path,$sizes){
        $fileInfo=pathinfo($path);
        $extension=$fileInfo["extension"];
        $key=$fileInfo["basename"];
        $filename=$fileInfo["filename"];

        $curl = new curl\Curl();

        foreach($sizes as $value){
            $suffix=$value["suffix"];
            $handle=$value["handle"];
            $saveName=$this->bucket.":".$filename.$suffix.".".$extension;
            $fops=$handle."|saveas/".$this->URLSafeBase64Encode($saveName);

            //post body
            $data=http_build_query(array(
                "bucket"=> $this->bucket,
                "key"=>$key,
                "fops"=>$fops
            ));

            $accessToken=$this->createAccessToken($this->handleUrl,$data,
                "application/x-www-form-urlencoded");

            $response = $curl->setOption(
                CURLOPT_HTTPHEADER,
                array(
                    "Host: ".$this->handleHost,
                    "Content-Type: application/x-www-form-urlencoded",
                    "Authorization: QBox ".$accessToken
                )
            )
            ->setOption(
                CURLOPT_POSTFIELDS,
                $data
            )
            ->post($this->handleUrl);
        }
    }
}
