<?php
namespace frontend\controllers\modernart;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class AwardController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }


    public function actionIndex($id=0)
    {
        if($id!=0){
            $model=Post::findOne($id);
            return $this->render("detail",[
                "model"=>$model
            ]);
        }

        return $this->render("index");
    }
}
