<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;
use common\models\Category;

class SpeechController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [

        ];
    }

    public function actionCollegeStudent(){
        return $this->render("index",[
            "category"=>Category::findOne(9)
        ]);
    }
    /**
     * 小学生感言
     * @return string
     */
    public function actionPupil(){
        $category=Category::findOne(18);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }
    /**
     * 美术教室活动感言
     * @return string
     */
    public function actionActivity(){
        $category=Category::findOne(14);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }
    /**
     * 教师培训反馈
     * @return string
     */
    public function actionTeacherTrain(){
        $category=Category::findOne(21);
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
