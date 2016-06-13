<?php
namespace frontend\controllers\enlightenment;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * 艺术启蒙 controller
 */
class RoomController extends Controller
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
        $activityResults=Post::find()->where(["category_id"=>Yii::$app->params["categories"]["activityRoom"]])
            ->limit(3)->all();
        $donationResults=Post::find()->where(["category_id"=>Yii::$app->params["categories"]["donation"]])
            ->limit(1)->all();
        return $this->render('index',[
            "activityResults"=>$activityResults,
            "donationResults"=>$donationResults
        ]);
    }

    public function actionDonation($id){
        $result=Post::findOne($id);
        return $this->render('donation',[
            "result"=>$result
        ]);
    }

}
