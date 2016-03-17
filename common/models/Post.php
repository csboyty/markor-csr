<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $excerpt
 * @property string $content
 * @property string $create_at
 * @property string $author
 * @property string $image
 * @property string $bg_image
 * @property string $video_url
 * @property integer $category_id
 * @property integer $user_id
 *
 * @property Category $category
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','content'], 'required'],
            [['content','organization','job'], 'string'],
            [['create_at'], 'safe'],
            [['create_at'], 'default', 'value' => function ($model, $attribute) {
                return date('Y-m-d');
            }],
            [['category_id', 'user_id'], 'integer'],
            [['user_id'], 'default', 'value' => function ($model, $attribute) {
                return Yii::$app->user->getId()?Yii::$app->user->getId():1;
            }],
            [['title', 'author'], 'string', 'max' => 32],
            [['excerpt', 'image', 'bg_image', 'video_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'content' => 'Content',
            'create_at' => 'Create At',
            'author' => 'Author',
            'image' => 'Image',
            'bg_image' => 'Bg Image',
            'video_url' => 'Video Url',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'is_top' => '是否首页显示',
            'organization'=>"单位",
            "job"=>"工作"
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
