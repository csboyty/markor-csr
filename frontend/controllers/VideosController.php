<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;
use common\models\Category;

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

    public function actionIndex($paramId=0)
    {
        if($paramId!=0){
            $model=Post::findOne($paramId);
            $category=Category::findOne($model->category_id);
            return $this->render("detail",[
                "model"=>$model,
                "category"=>$category
            ]);
        }

        $query=Post::find();

        $query->where(["category_id"=>Yii::$app->params["categories"]["video"]]);
        $results = $query->orderBy(["date"=>SORT_DESC])->all();

        return $this->render('index',[
            "results"=>$results
        ]);
    }
}
