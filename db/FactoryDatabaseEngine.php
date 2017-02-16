<?php
namespace catcoderphp\usermonitor\db;

use catcoderphp\usermonitor\models\UserMonitorLog;
use catcoderphp\usermonitor\models\UserMonitorMongoLog;

class FactoryDatabaseEngine
{
    public $model;

    public function __construct($engine)
    {
        $this->model = $this->getDBModel($engine);
    }

    private function getDBModel($engine) {
        if($engine) {
            $this->model = new UserMonitorMongoLog();
        } else {
            $this->model = new UserMonitorLog();
        }
        return $this->model;
    }
}