<?php
use common\models\Category;
$this->title = $param;

?>
<div class="section">
    <h2>搜索：<?= $param; ?></h2>
    <hr>
    <ul>
        <?php
            foreach($pageResults as $key=>$value){
                ?>

                <li style="display: block;padding:5px 5px 5px 20px;font-size: 20px;">
                    <a target="_blank" href="<?= $value; ?>"><?= $key; ?></a>
                </li>

                <?php
            }
        ?>
    </ul>

    <ul class="list3 list31">
        <?php
        foreach($results as $r){
            $url="";
            $content=$r->title?$r->title:$r->excerpt;
            $category=Category::findOne($r->category_id);
            $parentCategory=Category::findOne($category->parent_id);

            switch($r->category_id){
                case Yii::$app->params["categories"]["artNews"]:
                    $url="about/news/".$r->id;
                    break;
                case Yii::$app->params["categories"]["donation"]:
                    $url="enlightenment/room/donation".$r->id;
                    break;
                case Yii::$app->params["categories"]["activityTeacherTrain"]:
                    $url="activities/".$r->category_id."/".$r->id;
                    break;
                case Yii::$app->params["categories"]["activityRoom"]:
                    $url="activities/".$r->category_id."/".$r->id;
                    break;
                case Yii::$app->params["categories"]["activityVolunteer"]:
                    $url="activities/".$r->category_id."/".$r->id;
                    break;
                case Yii::$app->params["categories"]["videoChildDraw"]:
                    $url="videos/".$r->id;
                    break;
                case Yii::$app->params["categories"]["cultureProgram"]:
                    $url="culture-programs/".$r->id;
                    break;
                case Yii::$app->params["categories"]["story"]:
                    $url="stories/".$r->id;
                    break;
                case Yii::$app->params["categories"]["video"]:
                    $url="videos/".$r->id;
                    break;
                case Yii::$app->params["categories"]["wechat"]:
                    $url=$r->memo;
                    break;
                case Yii::$app->params["categories"]["volunteerTrain"]:
                    $url="education/volunteer/train";
                    break;
                default:
                    if($parentCategory->id==Yii::$app->params["categories"]["childDrawCollect"]){
                        $url="enlightenment/child-draw/collect";
                    }
                    break;
            }
            ?>

            <li class="item">
                <a target="_blank"  href="<?= $url; ?>">
                    <div class="thumbContainer">
                        <img class="thumb" src="<?= $r->thumb; ?>">
                    </div>
                    <div class="info">
                        <p class="excerpt">
                            <?= $content; ?>
                        </p>
                    </div>
                </a>
            </li>

        <?php
        }
        ?>
    </ul>
</div>