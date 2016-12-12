<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use linslin\yii2\curl;
use backend\models\QiNiu;
use common\models\ToDownload;

/**
 * LoginForm is the model behind the login form.
 */
class Download extends Model
{
    public $qiniu_marker;

    public function getKey($url){
        $pathInfo=pathinfo($url);

        return $pathInfo["basename"];
    }
    public function downloadFiles($list){
        foreach($list as $l){
            $key=$this->getKey($l);
            $this->downloadFile($key);
        }
    }

    public function downloadFile($key){
        $qiNiu=new QiNiu();
        $targetPath = "../../uploads/".$key;
        $sourcePath =$qiNiu->bucketDomain.$key;

        if(file_put_contents($targetPath,file_get_contents($sourcePath))){
            //写日志
            file_put_contents('../../uploads/downfile.log', date("Y-m-d H:i:s"). " " . $key. "\r\n", FILE_APPEND | LOCK_EX);
        }else{
            //写入到数据库
            $toDownload= new ToDownload();
            $toDownload->url=$sourcePath;
            $toDownload->save();
        }
    }


    public function downloadAllFilesFromQiNiu()
    {
        $qiNiu=new QiNiu();
        $response=$qiNiu->listFile($this->qiniu_marker);

        //marker存在，说明还有文件
        $this->qiniu_marker=$response->marker;

        foreach($response->items as $value){
            //下载文件
            $this->downloadFile($value->key);
        }

        if($this->qiniu_marker){
            $this->downloadAllFilesFromQiNiu();
        }

    }

    /**
     * 解析出src，使用DOMDocument，把content当做xml处理getElementsByTagName，getAttribute
     * 还可以用正则表达式处理
     * @param $content
     * @return mixed
     */
    public function handleContentToFindFiles($content){

        $doc= new \DOMDocument();

        $doc->loadHTML("<div>".$content."</div>");

        $results=$doc->getElementsByTagName("img");
        $resultsSrc=array();
        foreach($results as $i){
            $src=$i->getAttribute("src");
            array_push($resultsSrc,$src);
        }

        return $resultsSrc;

    }
}
