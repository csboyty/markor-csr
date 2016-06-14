<?php
namespace frontend\controllers\enlightenment;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * 艺术启蒙 controller
 */
class TeacherTrainController extends Controller
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
        $activityResultsQuery=clone $baseQuery;
        $speechResultsQuery=clone $baseQuery;
        $workResultsQuery=clone $baseQuery;

        $activityResults=$activityResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["activityTeacherTrain"]])
            ->limit(3)->orderBy(["date"=>SORT_DESC])->all();
        $speechResults=$speechResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["speechTeacherTrain"]])
            ->limit(1)->orderBy(["date"=>SORT_DESC])->all();
        $workResults=$workResultsQuery->where(["category_id"=>Yii::$app->params["categories"]["resultTeacherTrain"]])
            ->limit(3)->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('index',[
            "activityResults"=>$activityResults,
            "speechResults"=>$speechResults,
            "workResults"=>$workResults
        ]);
    }

}
