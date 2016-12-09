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

    public function downloadFiles($list){

    }

    public function downloadFile($key){
        $targetPath = "../../uploads/".$key;
        $sourcePath =$this->bucketDomain.$key;

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

    public function handleContentToFindFiles($content){

    }
}
