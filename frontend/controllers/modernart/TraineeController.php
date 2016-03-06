<?php
namespace frontend\controllers\modernart;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class TraineeController extends Controller
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

    /**
     * 捐赠小学名单
     * @return string
     */
    public function actionMiens()
    {

        return $this->render("miens");
    }

    /**
     * 捐赠历史活动
     * @return string
     */
    public function actionRecruits()
    {
        return $this->render('recruits');
    }
}
