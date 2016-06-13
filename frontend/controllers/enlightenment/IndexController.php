<?php
namespace frontend\controllers\enlightenment;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * 艺术启蒙 controller
 */
class EnlightenmentController extends Controller
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
        return $this->render('index',[

        ]);
    }
}
