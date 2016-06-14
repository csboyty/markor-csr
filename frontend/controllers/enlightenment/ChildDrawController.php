<?php
namespace frontend\controllers\enlightenment;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * 艺术启蒙 controller
 */
class ChildDrawController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex()
    {
        $baseQuery=Post::find();
        $collectResultsQuery=clone $baseQuery;
        $videoResultsQuery=clone $baseQuery;
        $workResultsQuery=clone $baseQuery;

        $collectResults=$collectResultsQuery->where(["category_id"=>
            Yii::$app->params["categories"]["childDrawCollect"]])
            ->limit(3)->orderBy(["id"=>SORT_DESC])->all();
        $videoResults=$videoResultsQuery->where(["category_id"=>
            Yii::$app->params["categories"]["videoChildDraw"]])
            ->orderBy(["id"=>SORT_DESC])->all();
        $workResults=$workResultsQuery->where(["category_id"=>
            Yii::$app->params["categories"]["resultChildDraw"]])
            ->limit(3)->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('index',[
            "collectResults"=>$collectResults,
            "videoResults"=>$videoResults,
            "workResults"=>$workResults
        ]);
    }

    public function actionCollect(){
        return $this->render('index',[
        ]);
    }

}
