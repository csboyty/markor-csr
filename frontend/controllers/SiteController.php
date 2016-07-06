<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;

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
        $baseQuery=Post::find();
        $wechatResultsQuery=clone $baseQuery;
        $rollResultsQuery=clone $baseQuery;
        $storyResultsQuery=clone $baseQuery;
        $videosQuery=clone $baseQuery;
        $cPResultsQuery=clone $baseQuery;
        $educationResultsQuery=clone $baseQuery;
        $enlightenmentResultsQuery=clone $baseQuery;

        $wechatResults=$wechatResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["wechat"]])
            ->limit(3)->orderBy(["date"=>SORT_DESC])->all();
        $rollResults=$rollResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["artNews"],
                "memo"=>1
            ])->limit(3)->orderBy(["date"=>SORT_DESC])->all();
        $storyResults=$storyResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["story"]])
            ->limit(6)->orderBy(["date"=>SORT_DESC])->all();
        $videos=$videosQuery->where(["category_id"=>[
            Yii::$app->params["categories"]["video"],
            Yii::$app->params["categories"]["videoChildDraw"]
        ]])->limit(1)->all();

        $cPResults=$cPResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["cultureProgram"]])
            ->limit(1)->orderBy(["date"=>SORT_DESC])->all();
        $educationResults=$educationResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["award"]])
            ->limit(1)->orderBy(["id"=>SORT_DESC])->all();
        $enlightenmentResults=$enlightenmentResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["activityRoom"]])
            ->limit(1)->orderBy(["id"=>SORT_DESC])->all();

        return $this->render('index',[
            "wechatResults"=>$wechatResults,
            "rollResults"=>$rollResults,
            "storyResults"=>$storyResults,
            "videos"=>$videos,
            "cPResults"=>$cPResults,
            "educationResults"=>$educationResults,
            "enlightenmentResults"=>$enlightenmentResults
        ]);

    }
    public function actionError(){
        return $this->render("error");
    }
}
