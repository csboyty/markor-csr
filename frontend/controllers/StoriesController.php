<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use common\models\Post;

/**
 * Art controller
 */
class StoriesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex($id=0){
        if($id!=0){
            $model=Post::findOne($id);
            //显示详情
            return $this->render('detail',[
                "model"=>$model
            ]);
        }

        $query=Post::find();

        $query->where(["category_id"=>Yii::$app->params["categories"]["story"]]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize' =>
        Yii::$app->params["perShowCount"]["default"]]);
        $results = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index',[
            "pages"=>$pages,
            "results"=>$results
        ]);
    }
}
