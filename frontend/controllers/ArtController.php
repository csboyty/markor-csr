<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use commom\models\Post;

/**
 * Art controller
 */
class ArtController extends Controller
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
    public function actionAbout()
    {
        return $this->render('about');
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
