<?php
namespace frontend\controllers\arteducation;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class ArtRoomController extends Controller
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
     * @return string
     */
    public function actionList()
    {
        $query=Post::find();
        $query->where(["category_id"=>Yii::$app->params["categories"]["donationList"]]);
        $result=$query->limit(1)->all();


        return $this->render("list",[
            "result"=>$result
        ]);
    }

    /**
     * 捐赠历史活动
     * @return string
     */
    public function actionActivities(){
        $query=Post::find();
        $query->where(["category_id"=>Yii::$app->params["categories"]["donationActivity"]]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
        Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('activities',[
            "pages"=>$pages,
            "results"=>$results
        ]);
    }
}
