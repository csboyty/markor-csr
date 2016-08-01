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
class SpeechController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex($paramId)
    {
        $category=Category::findOne($paramId);
        $parentCategory=Category::findOne($category->parent_id);

        $query=Post::ownFind();
        $query->andWhere(["category_id"=>$paramId]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
        Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
            "parentCategory"=>$parentCategory,
            "category"=>$category,
            "pages"=>$pages,
            "results"=>$results
        ]);
    }
}
