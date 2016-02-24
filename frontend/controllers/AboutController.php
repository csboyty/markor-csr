<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionWorks()
    {
        return $this->render('works');
    }
}
