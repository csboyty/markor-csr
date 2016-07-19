<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Art controller
 */
class CultureProgramsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex($paramId=0){
        if($paramId!=0){
            $model=Post::findOne($paramId);
            //显示详情
            return $this->render('detail',[
                "model"=>$model
            ]);
        }

        $query=Post::find();

        $query->where(["category_id"=>Yii::$app->params["categories"]["cultureProgram"],"memo"=>1]);
        $results = $query->orderBy(["date"=>SORT_DESC])->all();

        return $this->render('index',[
            "results"=>$results
        ]);
    }
    public function actionPost($id,$pId){
        $pModel=Post::findOne($pId);
        $model=Post::findOne($id);
        //显示详情
        return $this->render('postDetail',[
            "model"=>$model,
            "pModel"=>$pModel
        ]);
    }
}
