<?php
/**
 * Created by PhpStorm.
 * User: josegomez
 * Date: 10/02/2017
 * Time: 07:16 PM
 */

namespace catcoderphp\usermonitor\components;

use yii\base\Request;

class SpecialCase extends \yii\web\Request
{
    public $params;
    const SPECIAL_CASE = 'specialcase';

    public function receiveParams($params) {
        $this->params = $params;
    }
    
}