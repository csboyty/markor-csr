<?php
namespace frontend\controllers\modernart;

use Yii;
use yii\web\Controller;
use common\models\Post;

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
        return $this->render("index");
    }

    /**
     * 捐赠小学名单
     * @param int $id
     * @return string
     */
    public function actionMiens($id=0)
    {
        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("mienDetail",[
                "model"=>$model
            ]);
        }
        return $this->render("miens");
    }

    /**
     * 捐赠历史活动
     * @param int $id
     * @return string
     */
    public function actionRecruits($id=0)
    {
        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("recruitDetail",[
                "model"=>$model
            ]);
        }
        return $this->render('recruits');
    }
}
