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

    public function actionNews()
    {
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

    public function actionWorks()
    {
        return $this->render('works');
    }
}
