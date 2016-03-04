<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
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
        $results = $query->limit(3)->all();

        return $this->render('index',[
            "results"=>$results
        ]);

    }
    public function actionError(){
        return $this->render("error");
    }
}
