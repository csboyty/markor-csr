<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;
use common\models\User;
use backend\models\QiNiu;
use common\models\Category;

/**
 * Class PostController 文章控制器
 * @package backend\controllers
 */
class PostController extends \yii\web\Controller
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

    public function actionList(){
        $params=Yii::$app->request->queryParams;
        $limit=$params["iDisplayLength"];
        $offset=$params["iDisplayStart"];
        $category=$params["category"];
        $parentCategoryFlag=isset($params["parent_category"])?$params["parent_category"]:false;
        $filter=isset($params["filter"])?$params["filter"]:false;
        $sEcho = $params["sEcho"];
        $query=Post::find();

        if($parentCategoryFlag){
            //如果传过来的是父分类
            $childCategoryIds=array();
            $childCategories=Category::find()
                ->where(["parent_id"=>$category])
                ->select(["id"])
                ->asArray()
                ->all();
            foreach($childCategories as $c){
                array_push($childCategoryIds,$c["id"]);
            }
            $query->where(["category_id"=>$childCategoryIds]);
        }else{
            $query->where(["category_id"=>$category]);
        }

        //搜索条件
        if($filter){
            $query->andWhere($filter);
        }

        $count=$query->count();
        $aaData=$query
            ->asArray()
            ->limit($limit)
            ->orderBy(['date' => SORT_DESC])
            ->offset($offset)
            ->all();

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return [
            'success' => true,
            'aaData' => $aaData,
            "iTotalRecords"=>$count,
            "iTotalDisplayRecords"=>$count,
            "sEcho"=>$sEcho
        ];

    }

    /**
     *新增和修改提交
     * @return array
     */
    public function actionSubmit(){
        $params=Yii::$app->request->post();

        if(isset($params["id"])){
            $model = $this->findModel($params["id"]);
        }else{
            $model=new Post();
        }

        //切图
        $qiNiu=new QiNiu();
        if(isset($params["thumb"])){

            //如果是修改的时候，没有更新图片不需要切图
            if($model->thumb!=$params["thumb"]){
                $qiNiu->handleImage($params["thumb"],Yii::$app->params["imageSizes"]["thumbnail"]);
            }

        }
        /*if(isset($params["bg_image"])){
            $qiNiu->handleImage($params["bg_image"],Yii::$app->params["imageSizes"]["bgImage"]);
        }*/

        $data=array();

        $params["user_id"]=Yii::$app->user->getId();

        //yii自动生成的form参数是Xxx["name"]这种形式，获取后就会是在一个Xxx中
        $data["Post"]=$params;

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if ($model->load($data) && $model->save()) {
            return [
                "success"=>true
            ];
        }else{
            return [
                "success"=>false,
                "error_code"=>1
            ];
        }
    }

    public function actionDelete($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if($this->findModel($id)->delete()){
            return [
                "success"=>true
            ];
        }else{
            return [
                "success"=>false,
                "error_code"=>1
            ];
        }

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
