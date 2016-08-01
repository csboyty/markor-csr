<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class SearchController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex($param)
    {
        $pageResults=[];
        $results=[];

        $urls=Yii::$app->params["searchParams"];
        foreach($urls as $key=>$value){
            if(stristr($key,$param)!=false){
                $pageResults[$key]=$value;
            }
        }

        $results=Post::ownFind()->andWhere(["or",['like', 'title', $param],['like', 'excerpt', $param],['like', 'author', $param]])
            ->orderBy(["id"=>SORT_DESC])->all();

        return $this->render('index',[
            "param"=>$param,
            "pageResults"=>$pageResults,
            "results"=>$results
        ]);
    }
}
