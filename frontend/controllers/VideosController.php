<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class VideosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex($id=0)
    {
        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("detail",[
                "model"=>$model
            ]);
        }

        $query=Post::find();

        $query->where(["category_id"=>Yii::$app->params["categories"]["video"]]);
        $results = $query->all();

        return $this->render('index',[
            "results"=>$results
        ]);
    }
}
