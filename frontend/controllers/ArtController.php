<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use common\models\Post;

/**
 * Art controller
 */
class ArtController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionNews($id=0)
    {
        if($id!=0){
            $model=Post::findOne($id);
            //显示详情
            return $this->render('newsDetail',[
                "model"=>$model
            ]);
        }


        $query=Post::find();

        $query->where(["category_id"=>Yii::$app->params["categories"]["artNews"]]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
            Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('news',[
            "pages"=>$pages,
            "results"=>$results
        ]);
    }

    public function actionWorks($id)
    {
        $childQuery=Post::find();
        $loveQuery=clone $childQuery;
        $collegeQuery= clone $childQuery;

        $childQuery->where(["category_id"=>Yii::$app->params["categories"]["ChildDrawRecruit"]]);
        $childResults=$childQuery->limit(4)->all();

        $loveQuery->where(["category_id"=>Yii::$app->params["categories"]["childDrawResult"]]);
        $loveResults=$childQuery->limit(4)->all();

        $collegeQuery->where(["category_id"=>Yii::$app->params["categories"]["collegeStudentResult"]]);
        $collegeResults=$childQuery->limit(4)->all();

        return $this->render('works',[
            "childResults"=>$childResults,
            "loveResults"=>$loveResults,
            "collegeResults"=>$childResults
        ]);
    }
}
