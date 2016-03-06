<?php
namespace frontend\controllers\arteducation;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class IndexController extends Controller
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
        $donationQuery=Post::find();
        $teacherQuery=clone $donationQuery;
        $volunteerQuery= clone $donationQuery;
        $childDrawQuery=clone $donationQuery;

        $donationQuery->where(["category_id"=>Yii::$app->params["categories"]["donationList"]]);
        $donationResults=$donationQuery->limit(4)->all();

        $teacherQuery->where(["category_id"=>Yii::$app->params["categories"]["teacherTrainActivity"]]);
        $teacherResults=$teacherQuery->limit(4)->all();

        $volunteerQuery->where(["category_id"=>Yii::$app->params["categories"]["volunteerActivity"]]);
        $volunteerResults=$volunteerQuery->limit(4)->all();

        $childDrawQuery->where(["category_id"=>Yii::$app->params["categories"]["childDrawResult"]]);
        $childDrawResults=$childDrawQuery->limit(4)->all();

        return $this->render('index',[
            "donationResults"=>$donationResults,
            "teacherResults"=>$teacherResults,
            "volunteerResults"=>$volunteerResults,
            "childDrawResults"=>$childDrawResults
        ]);
    }
}
