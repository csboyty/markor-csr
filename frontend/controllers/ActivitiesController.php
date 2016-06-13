<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;
use common\models\Category;
use yii\data\Pagination;

/**
 * 历史活动 controller
 */
class ActivitiesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex($category_id)
    {
        $category=Category::findOne($category_id);
        $parentCategory=Category::findOne($category->parent_id);

        $query=Post::find();
        $query->where(["category_id"=>$category_id]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
        Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
            "category"=>$parentCategory,
            "pages"=>$pages,
            "results"=>$results
        ]);
    }
}
