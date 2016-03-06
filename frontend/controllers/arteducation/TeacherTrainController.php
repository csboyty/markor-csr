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
     * 教师培训感言
     * @param int $id
     * @return string
     */
    public function actionSpeech($id=0){

        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("speechDetail",[
                "model"=>$model
            ]);
        }

        return $this->render("speech");
    }

    /**
     * 教师培训活动
     * @param int $id
     * @return string
     */
    public function actionActivities($id=0){

        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("activityDetail",[
                "model"=>$model
            ]);
        }

        return $this->render("activities");
    }

    /**
     * 教师作品
     * @param int $id
     * @return string
     */
    public function actionWorks($id=0){

        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("workDetail",[
                "model"=>$model
            ]);
        }

        return $this->render("works");
    }

}
