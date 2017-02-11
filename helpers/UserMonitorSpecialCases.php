<?php
/**
 * Created by PhpStorm.
 * User: josegomez
 * Date: 10/02/2017
 * Time: 05:25 PM
 */

namespace catcoderphp\usermonitor\helpers;

use catcoderphp\usermonitor\components\SpecialCase;

class UserMonitorSpecialCases
{
    public static function specialEvent($event,$description){
        $params = [
            "event" => $event,
            "description" => $description
        ];
        $specialCase = new SpecialCase();
        $specialCase->receiveParams($params);
    }
}