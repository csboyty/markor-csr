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
     */
    public function actionSpeech(){
        return $this->render("speech");
    }

    /**
     * 志愿者活动
     */
    public function actionActivities(){
        return $this->render("activities");
    }

}
