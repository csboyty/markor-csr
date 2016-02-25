<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;

/**
 * Class AccountController 账号控制器
 * @package backend\controllers
 */
class AccountController extends \yii\web\Controller
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
                            User::ROLE_ADMIN,
                            User::ROLE_SUPER_ADMIN
                        ],
                    ]
                ],
            ]
        ];
    }

    public function actionHome(){
        return $this->render("home");
    }

}
