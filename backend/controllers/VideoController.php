<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;

class VideoController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [

        ];
    }
    public function actionIndex(){
        return $this->render("index");
    }


    public function actionCreate(){

        $model=new Post();

        return $this->render('createOrUpdate',[
            'model' => $model,
        ]);
    }

    public function actionUpdate($id){

        //这样获取会将isNewRecord设置为false
        $model = $this->findModel($id);

        return $this->render('createOrUpdate',[
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
