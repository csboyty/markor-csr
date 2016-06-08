<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;
use common\models\User;
use common\models\Category;

/**
 * Class ActivityController 活动控制器
 * @package backend\controllers
 */
class ActivityController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // We will override the default rule config with the new AccessRule class
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [
                            User::ROLE_ADMIN
                        ],
                    ]
                ],
            ]
        ];
    }

    /**
     * 快乐美术教室历年活动
     * @return string
     */
    public function actionTeacher(){
        $category=Category::findOne(Yii::$app->params["categories"]["activityTeacher"]);
        $parentCategory=Category::findOne($category->parent_id);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }

    /**
     * 志愿者历年活动
     * @return string
     */
    public function actionVolunteer(){
        $category=Category::findOne(Yii::$app->params["categories"]["activityVolunteer"]);
        $parentCategory=Category::findOne($category->parent_id);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }

    /**
     * 教师培训历年活动
     * @return string
     */
    public function actionTeacherTrain(){
        $category=Category::findOne(Yii::$app->params["categories"]["activityTeacherTrain"]);
        $parentCategory=Category::findOne($category->parent_id);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }


    /**
     * @param $category_id 路径上的参数
     * @return string
     */
    public function actionCreate($category_id){

        $model=new Post();
        $category=Category::findOne($category_id);
        $parentCategory=Category::findOne($category->parent_id);
        return $this->render('createOrUpdate',[
            "parentCategory"=>$parentCategory,
            "category"=>$category,
            'model' => $model
        ]);
    }

    public function actionUpdate($id){

        //这样获取会将isNewRecord设置为false
        $model = $this->findModel($id);
        $category=Category::findOne($model->category_id);
        $parentCategory=Category::findOne($category->parent_id);
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
