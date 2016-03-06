<?php
namespace frontend\controllers\arteducation;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
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
        return $this->render("index");
    }

    /**
     * 教室培训感言
     */
    public function actionSpeech(){
        return $this->render("speech");
    }

    /**
     * 教室培训活动
     */
    public function actionActivities(){
        return $this->render("activities");
    }

    /**
     * 教室培训作品
     */
    public function actionWorks(){
        return $this->render("works");
    }

}
