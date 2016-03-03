<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

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

        $query->where(["category_id"=>Yii::$app->params["categories"]["cultureProgram"]]);
        $results = $query->all();

        return $this->render('index',[
            "results"=>$results
        ]);
    }
}
