<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;
use common\models\User;
use common\models\Category;


/**
 * Class ChildDrawController 儿童画控制器
 * @package backend\controllers
 */
class ChildDrawController extends \yii\web\Controller
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

    public function actionCollect(){
        return $this->render("collect");
    }


    public function actionCollectCreate(){

        $model=new Post();
        $categories=Category::find()
            //->where(["parent_id"=>0])
            ->where(["parent_id"=>Yii::$app->params["categories"]["childDrawCollect"]])
            ->asArray()
            ->all();
        return $this->render('collectCOU',[
            'categories'=>$categories,
            'model' => $model,
        ]);
    }

    public function actionCollectUpdate($id){

        //这样获取会将isNewRecord设置为false
        $model = $this->findModel($id);
        $categories=Category::find()
            //->where(["parent_id"=>0])
            ->where(["parent_id"=>Yii::$app->params["categories"]["childDrawCollect"]])
            ->asArray()
            ->all();
        return $this->render('collectCOU',[
            'categories'=>$categories,
            'model' => $model,
        ]);
    }

    /**
     * Finds the Notice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
