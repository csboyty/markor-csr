<?php
namespace frontend\controllers\education;

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
        return $this->render("/art-education/teacher-train/index");
    }

    /**
     * 教室培训感言
     */
    public function actionSpeech(){
        return $this->render("/art-education/teacher-train/speech");
    }

    /**
     * 教室培训活动
     */
    public function actionActivity(){
        return $this->render("/art-education/teacher-train/activity");
    }

    /**
     * 教室培训作品
     */
    public function actionWork(){
        return $this->render("/art-education/teacher-train/work");
    }

}
