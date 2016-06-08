<?php

namespace common\models;

use Yii;
use common\models\User;
use common\models\Category;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $thumb
 * @property string $title
 * @property string $excerpt
 * @property string $date
 * @property string $author
 * @property string $content
 * @property string $memo
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
            [['category_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['content'], 'string'],
            [['thumb','bg_image'], 'string', 'max' => 128],
            [['title'], 'string', 'max' => 32],
            [['excerpt', 'memo'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'thumb' => 'Thumb',
            'bg_image'=> 'Bg Image',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'date' => 'Date',
            'author' => 'Author',
            'content' => 'Content',
            'memo' => 'Memo',
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
