<?php
namespace frontend\controllers\arteducation;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class ChildDrawController extends Controller
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
     * 儿童画视频
     * @return string
     */
    public function actionVideos()
    {
        $query=Post::find();
        $query->where(["category_id"=>Yii::$app->params["categories"]["donationList"]]);
        $result=$query->limit(1)->all();


        return $this->render("videos",[
            "result"=>$result
        ]);
    }

    /**
     * 爱心作品
     */
    public function actionWorks(){
        $query=Post::find();
        $query->where(["category_id"=>Yii::$app->params["categories"]["donationList"]]);
        $result=$query->limit(1)->all();

        return $this->render("works",[
            "result"=>$result
        ]);
    }

    /**
     * 历年征集函
     * @return string
     */
    public function actionRecruits(){
        $query=Post::find();
        $query->where(["category_id"=>Yii::$app->params["categories"]["donationActivity"]]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
        Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('recruits',[
            "pages"=>$pages,
            "results"=>$results
        ]);
    }
}
