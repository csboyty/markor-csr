<?php
namespace frontend\controllers\education;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class IndexController extends Controller
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
        $collegeResults=Post::ownFind()->andWhere(["category_id"=>Yii::$app->params["categories"]["resultCollegeStudent"]])
            ->limit(3)->orderBy(["id"=>SORT_DESC])->all();


        return $this->render("index",[
            "collegeResults"=>$collegeResults
        ]);
    }
}
