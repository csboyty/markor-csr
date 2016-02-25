<?php

namespace backend\controllers;

use Yii;
use backend\models\LoginForm;
use common\models\User;

/**
 * Class SiteController 网站控制器
 * @package backend\controllers
 */
class SiteController extends \yii\web\Controller
{
    public $layout = false;

    public function actionLogin()
    {
        $this->layout="login";

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(["account/home"]);
        }

        $model = new LoginForm();

        $params=Yii::$app->request->post();

        $data=array();
        $data["LoginForm"]=$params;

        if ($model->load($data) && $model->login()) {
            return $this->redirect(["account/home"]);
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();

        return $this->redirect(['site/login']);
    }

    public function actionError(){
        return $this->render("error");
    }

    public function actionHandle(){
        return $this->render("handle");
    }

    /**
     * 获取加密的密码
     * @param $password
     * @return string
     */
    public function actionPassword($password){
        $model=new User();
        $model->setPassword($password);
        return $model->password;
    }
}
