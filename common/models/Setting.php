<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $resources_prefix_type
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resources_prefix_type'], 'integer'],
            [['qiniu_marker'], 'string','max' => 128],
            [['last_time'], 'string','max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resources_prefix_type' => 'Resources Prefix Type',
            'qiniu_marker' => 'QiNiu Marker',
            'last_time' => 'Last Time'
        ];
    }
}
