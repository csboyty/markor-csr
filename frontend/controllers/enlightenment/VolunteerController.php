<?php
namespace frontend\controllers\enlightenment;

use Yii;
use yii\web\Controller;
use common\models\Post;
use yii\data\Pagination;

/**
 * 艺术启蒙 controller
 */
class VolunteerController extends Controller
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
        $baseQuery=Post::ownFind();
        $activityResultsQuery=clone $baseQuery;
        $speechResultsQuery=clone $baseQuery;
        $trainResultsQuery=clone $baseQuery;

        $activityResults=$activityResultsQuery->andWhere(["category_id"=>
            Yii::$app->params["categories"]["activityVolunteer"]])
            ->limit(3)->orderBy(["date"=>SORT_DESC])->all();
        $speechResults=$speechResultsQuery->andWhere(["category_id"=>
            Yii::$app->params["categories"]["speechVolunteer"]])
            ->limit(1)->orderBy(["date"=>SORT_DESC])->all();
        $trainResults=$trainResultsQuery->andWhere(["category_id"=>
            Yii::$app->params["categories"]["volunteerTrain"]])
            ->limit(3)->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('index',[
            "activityResults"=>$activityResults,
            "speechResults"=>$speechResults,
            "trainResults"=>$trainResults
        ]);
    }

    public function actionTrain(){

        $query=Post::andWhere();
        $query->andWhere(["category_id"=>Yii::$app->params["categories"]["volunteerTrain"]]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
        Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->orderBy(["id"=>SORT_DESC])->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('train',[
            "pages"=>$pages,
            "results"=>$results
        ]);
    }

}
