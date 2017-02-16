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
class UserMonitorMongoLog extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'logs';
    }



    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id' ,
            'created',
            'application_identifier',
            'user_identifier',
            'ip' ,
            'route',
            'event',
            'description'
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
        $this->save();
    }
}