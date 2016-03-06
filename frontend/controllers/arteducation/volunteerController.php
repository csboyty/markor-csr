<?php
namespace frontend\controllers\arteducation;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
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
        return $this->render("index");
    }

    /**
     * 志愿者感言
     * @param int $id
     * @return string
     */
    public function actionSpeech($id=0)
    {
        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("speechDetail",[
                "model"=>$model
            ]);
        }

        return $this->render("speech");
    }

    /**
     * 志愿者活动
     * @param int $id
     * @return string
     */
    public function actionActivities($id=0)
    {

        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("activityDetail",[
                "model"=>$model
            ]);
        }

        return $this->render("activities");
    }

}
