<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;
use common\models\Post;
use common\models\Setting;
use yii\db\Query;

/**
 * Class RecruitController 实习生招聘控制器
 * @package backend\controllers
 */
class SettingController extends \yii\web\Controller
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
                            User::ROLE_SUPER_ADMIN
                        ],
                    ]
                ],
            ]
        ];
    }
    /**
     * 设置
     * @return string
     */
    public function actionIndex(){
        $model=$this->findModel();
        return $this->render("index",[
            'model' => $model,
        ]);
    }

    /**
     *新增和修改提交
     * @return array
     */
    public function actionSubmit(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $params=Yii::$app->request->post();

        $model=$this->findModel();


        if($model->resources_prefix_type!=$params["resources_prefix_type"]){

            $model->resources_prefix_type=$params["resources_prefix_type"];

            if($params["resources_prefix_type"]==0){
                $query = (new Query())
                    ->from('post')
                    ->orderBy('id');

                // or if you want to iterate the row one by one
                foreach ($query->each() as $value) {
                    $postModel=$this->findPostModel($value["id"]);
                    $postModel->thumb=str_replace(Yii::$app->params["qiNiu"]['bucketDomain'],"/uploads/",$value["thumb"]);
                    $postModel->bg_image=str_replace(Yii::$app->params["qiNiu"]['bucketDomain'],"/uploads/",$value["bg_image"]);
                    $postModel->content=str_replace(Yii::$app->params["qiNiu"]['bucketDomain'],"/uploads/",$value["content"]);

                    $postModel->save();
                }
            }else{
                $query = (new Query())
                    ->from('post')
                    ->orderBy('id');

                // or if you want to iterate the row one by one
                foreach ($query->each() as $value) {
                    //$user 指代的是用户表当中的其中一行数据
                    $postModel=$this->findPostModel($value["id"]);
                    $postModel->thumb=str_replace("/uploads/",Yii::$app->params["qiNiu"]['bucketDomain'],$value["thumb"]);
                    $postModel->bg_image=str_replace("/uploads/",Yii::$app->params["qiNiu"]['bucketDomain'],$value["bg_image"]);
                    $postModel->content=str_replace("/uploads/",Yii::$app->params["qiNiu"]['bucketDomain'],$value["content"]);

                    $postModel->save();
                }

            }

        }

        if($model->save()){
            return [
                "success"=>true
            ];
        }else{
            return [
                "success"=>false,
                "error_code"=>1
            ];
        }
    }

    /**
     * Finds the Notice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel()
    {
        if (($model = Setting::find()->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected  function findPostModel($id){
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
