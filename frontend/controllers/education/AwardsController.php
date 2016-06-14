<?php
namespace frontend\controllers\education;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class AwardsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }


    public function actionIndex()
    {
        return $this->render("index",[

        ]);
    }
}
