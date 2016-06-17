<?php
namespace frontend\controllers\education;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class AwardsController extends Controller
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
        $results=Post::find()->where(["category_id"=>Yii::$app->params["categories"]["award"]])
            ->orderBy(["id"=>SORT_DESC])->all();
        return $this->render("index",[
            "results"=>$results
        ]);
    }
}
