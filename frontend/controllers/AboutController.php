<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use common\models\Post;

/**
 * Art controller
 */
class AboutController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex(){
        return $this->render('index',[

        ]);
    }

    public function actionHonor(){
        $query=Post::find();
        $query->where(["category_id"=>Yii::$app->params["categories"]["artHonor"]]);
        $results = $query->all();
        return $this->render('honor',[
            "results"=>$results
        ]);
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
}
