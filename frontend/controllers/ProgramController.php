<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class ProgramController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $query=Post::find();

        $query->where(["category_id"=>Yii::$app->params["categories"]["artNews"]]);
        $results = $query->all();

        return $this->render('index',[
            "results"=>$results
        ]);
    }

    public function actionDetail($id){
        $model=Post::findOne($id);
        return $this->render("detail",[
            "model"=>$model
        ]);
    }
}
