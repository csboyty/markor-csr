<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "recruit".
 *
 * @property integer $id
 * @property string $job
 * @property string $job_require
 * @property string $internship_require
 * @property string $address
 * @property string $date
 * @property integer $user_id
 *
 * @property User $user
 */
class Recruit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recruit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['user_id'], 'integer'],
            [['published'], 'integer'],
            [['job'], 'string', 'max' => 32],
            [['job_require', 'internship_require'], 'string', 'max' => 512],
            [['address'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job' => 'Job',
            'job_require' => 'Job Require',
            'internship_require' => 'Internship Require',
            'address' => 'Address',
            'date' => 'Date',
            'user_id' => 'User ID',
            'published' => 'Published'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
