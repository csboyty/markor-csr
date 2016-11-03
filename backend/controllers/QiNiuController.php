<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;
use backend\models\QiNiu;

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
     * 部署后从七牛初始化所有的文件
     */
    public function actionDownloadFiles(){
        $qiNiu=new QiNiu();
        //$qiNiu->downloadFromQiNiu();

        return true;
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
