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
        $wechatResults=Post::find()->where(["category_id"=>Yii::$app->params["categories"]["wechat"]])
            ->limit(3)->all();
        $rollResults=Post::find()->where(["category_id"=>Yii::$app->params["categories"]["artNews"],
                "memo"=>1
            ])->limit(3)->all();
        $storyResults=Post::find()->where(["category_id"=>Yii::$app->params["categories"]["artNews"]])
            ->limit(6)->all();
        $videos=Post::find()->where(["category_id"=>[
            Yii::$app->params["categories"]["video"],
            Yii::$app->params["categories"]["videoChildDraw"]
        ]])->limit(1)->all();

        return $this->render('index',[
            "wechatResults"=>$wechatResults,
            "rollResults"=>$rollResults,
            "storyResults"=>$storyResults,
            "videos"=>$videos
        ]);

    }
    public function actionError(){
        return $this->render("error");
    }
}
