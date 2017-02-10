<?php

namespace catcoderphp\usermonitor\models;

use Yii;

/**
 * This is the model class for table "user_monitor".
 *
 * @property int $id
 * @property string $url
 * @property string $visited_by
 * @property string $event
 * @property int $created_at
 * @property int $updated_at
 */
class UserMonitorLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_monitor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['visited_by'], 'string', 'max' => 255],
            [['event'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'visited_by' => 'Visited By',
            'event' => 'Event',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}