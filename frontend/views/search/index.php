<?php
use common\models\Category;
use frontend\models\Helper;

$this->title = $param;

?>
<div class="section searchResults">
    <h2>搜索：<?= $param; ?></h2>
    <h3>相关栏目</h3>
    <ul class="searchCategoryList">
        <?php
            foreach($pageResults as $key=>$value){
                ?>

                <li>
                    <a target="_blank" href="<?= $value; ?>"><?= $key; ?></a>
                </li>

                <?php
            }
        ?>
    </ul>
    <h3>相关页面</h3>
    <ul class="list3 list31 searchPageList">
        <?php
        foreach($results as $r){
            $url="";
            $content=$r->title?$r->title:$r->excerpt;
            $category=Category::findOne($r->category_id);
            $parentCategory=Category::findOne($category->parent_id);

            switch($r->category_id){
                case Yii::$app->params["categories"]["artHonor"]:
                    $url="about/honor";
                    break;
                case Yii::$app->params["categories"]["artNews"]:
                    $url="about/news/".$r->id;
                    break;
                case Yii::$app->params["categories"]["activityRoom"]:
                    $url="activities/".$r->category_id."/".$r->id;
                    break;
                case Yii::$app->params["categories"]["donation"]:
                    $url="enlightenment/room/donation".$r->id;
                    break;
                case Yii::$app->params["categories"]["activityTeacherTrain"]:
                    $url="activities/".$r->category_id."/".$r->id;
                    break;
                case Yii::$app->params["categories"]["speechTeacherTrain"]:
                    $url="speech/".$r->category_id;
                    break;
                case Yii::$app->params["categories"]["resultTeacherTrain"]:
                    $url="works/".$r->category_id;
                    break;
                case Yii::$app->params["categories"]["activityVolunteer"]:
                    $url="activities/".$r->category_id."/".$r->id;
                    break;
                case Yii::$app->params["categories"]["speechVolunteer"]:
                    $url="speech/".$r->category_id;
                    break;
                case Yii::$app->params["categories"]["volunteerTrain"]:
                    $url="education/volunteer/train";
                    break;
                case Yii::$app->params["categories"]["childDrawCollect"]:
                    $url="enlightenment/child-draw/collect";
                    break;
                case Yii::$app->params["categories"]["resultChildDraw"]:
                    $url="works/".$r->category_id;
                    break;
                case Yii::$app->params["categories"]["videoChildDraw"]:
                    $url="videos/".$r->id;
                    break;
                case Yii::$app->params["categories"]["resultCollegeStudent"]:
                    $url="works/".$r->category_id;
                    break;
                case Yii::$app->params["categories"]["speechTrainee"]:
                    $url="speech/".$r->category_id;
                    break;
                case Yii::$app->params["categories"]["recruit"]:
                    $url="education/trainee/recruits";
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
                default:
                    if(isset($parentCategory)&&$parentCategory->id==Yii::$app->params["categories"]["childDrawCollect"]){
                        $url="enlightenment/child-draw/collect";
                    }
                    break;
            }
            ?>

            <li class="item">

                <a target="_blank"  href="<?= $url; ?>">
                    <div class="thumbContainer">

                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $r->thumb; ?>" >
                        </picture>
                    </div>
                    <div class="info">
                       <h2 class="title"><?= isset($r->title)?$r->title:""?></h2>
                        <p class="author"><?= isset($r->author)?$r->author:""?></p>
                        <p class="date"><?= isset($r->date)?$r->date:""?></p>
                        <p class="excerpt">
                            <?= isset($r->excerpt)?$r->excerpt:""?>
                        </p>
                    </div>
                </a>
            </li>

        <?php
        }
        ?>
    </ul>
</div>