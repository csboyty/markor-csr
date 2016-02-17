<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;
use common\models\Category;

class ResultController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [

        ];
    }

    public function actionLove(){
        $category=Category::findOne(11);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }
    public function actionStudent(){
        $category=Category::findOne(12);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }

    /**
     * 儿童画以往产品
     */
    public function actionChildProduct(){
        $category=Category::findOne(19);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }
    /**
     * 儿童画征集函&儿童画
     */
    public function actionChildDraw(){
        $category=Category::findOne(20);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }



    public function actionCreate(){
        $model=new Post();
        $category=Category::findOne($_GET["category_id"]);
        $parentCategory=Category::findOne($category->parent);
        return $this->render('createOrUpdate',[
            "parentCategory"=>$parentCategory,
            "category"=>$category,
            'model' => $model,
        ]);
    }

    public function actionUpdate($id){

        //这样获取会将isNewRecord设置为false
        $model = $this->findModel($id);
        $category=Category::findOne($model->category_id);
        $parentCategory=Category::findOne($category->parent);
        return $this->render('createOrUpdate',[
            "parentCategory"=>$parentCategory,
            "category"=>$category,
            'model' => $model,
        ]);
    }

    /**
     * Finds the Notice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
