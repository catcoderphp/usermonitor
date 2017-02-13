<?php

namespace catcoderphp\usermonitor\models;

use Yii;

/**
 * This is the model class for table "user_monitor".
 *
 * @property int $id
 * @property int $created
 * @property string $application_identifier
 * @property string $user_identifier
 * @property string $ip
 * @property string $route
 * @property string $event
 * @property string $description
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
            [['created'], 'integer'],
            [['application_identifier', 'user_identifier', 'ip', 'route', 'event', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created' => 'Created',
            'application_identifier' => 'Application Identifier',
            'user_identifier' => 'User Identifier',
            'ip' => 'Ip',
            'route' => 'Route',
            'event' => 'Event',
            'description' => 'Description',
        ];
    }


    public function saveLog($params) {
        $this->created = $params["created"];
        $this->application_identifier = $params["application_identifier"];
        $this->user_identifier = $params["user_identifier"];
        $this->ip = $params["ip"];
        $this->route = $params["route"];
        $this->event = $params["event"];
        $this->description = $params["description"];
        $this->save(false,array_keys($params));
    }
}
