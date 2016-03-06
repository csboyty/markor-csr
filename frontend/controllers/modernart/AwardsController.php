<?php
namespace frontend\controllers\modernart;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class AwardController extends Controller
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

        return $this->render("index");
    }
}
