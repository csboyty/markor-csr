<?php
namespace frontend\controllers\education;

use Yii;
use yii\web\Controller;
use common\models\Post;
use common\models\Recruit;

/**
 * Site controller
 */
class TraineeController extends Controller
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
        $speechResults=Post::ownFind()->andWhere(["category_id"=>Yii::$app->params["categories"]["speechTrainee"]])
            ->orderBy(["id"=>SORT_DESC])->limit(3)->all();

        $recruitResults=Recruit::find()->limit(1)->orderBy(["date"=>SORT_DESC])->all();

        return $this->render("index",[
            "speechResults"=>$speechResults,
            "recruitResults"=>$recruitResults
        ]);
    }

    public function actionRecruits(){

        $results=Recruit::find()->where(["published"=>1])
            ->orderBy(["date"=>SORT_DESC])->all();
        return $this->render("recruits",[
            "results"=>$results
        ]);
    }

}
