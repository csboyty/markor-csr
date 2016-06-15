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

    public function actionIndex($category_id,$id=0)
    {
        $category=Category::findOne($category_id);
        $parentCategory=Category::findOne($category->parent_id);

        if($id!=0){
            if($id!=0){
                $model=Post::findOne($id);
                return $this->render("detail",[
                    "model"=>$model,
                    "category"=>$category,
                    "parentCategory"=>$parentCategory
                ]);
            }
        }

        $query=Post::find();
        $query->where(["category_id"=>$category_id]);
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
