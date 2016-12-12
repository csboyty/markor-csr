<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;
use backend\models\QiNiu;
use backend\models\Download;

/**
 * Class QiNiuController 七牛相关操作控制器
 * @package backend\controllers
 */
class QiNiuController extends Controller
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // We will override the default rule config with the new AccessRule class
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'except' => ['fop-notify'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [
                            User::ROLE_ADMIN
                        ],
                    ]
                ],
            ]
        ];
    }

    /**
     * 部署后从七牛初始化所有的文件，这个需要超长的执行时间，在本机执行，并且需要修改php的配置
     */
    public function actionDownloadAllFiles(){
        $download=new Download();
        //$download->downloadAllFilesFromQiNiu();

        return true;
    }

    public function actionFopNotify(){
        $down=new Download();

        $data=file_get_contents('php://input');

        $data=json_decode($data);
        $items=$data->items;

        foreach($items as $i){
            $down->downloadFile($i->key);
        }
    }

    public function actionUpToken(){

        $qiNiu=new QiNiu();

        $encodedPutPolicy = $qiNiu->URLSafeBase64Encode($qiNiu->createReturnBody());

        //hmac_sha1这个函数没有，用其他函数实现
        //$sign=mhash(MHASH_SHA1,$encodedPutPolicy, $this->secretKey);
        $sign=hash_hmac('sha1', $encodedPutPolicy, $qiNiu->secretKey, true);

        $encodedSign =$qiNiu->URLSafeBase64Encode($sign);

        $uploadToken=$qiNiu->accessKey.":".$encodedSign.":".$encodedPutPolicy;

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return array("uptoken"=>$uploadToken);
    }
}
