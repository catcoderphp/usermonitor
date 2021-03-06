<?php

namespace catcoderphp\usermonitor;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * Bootstrap
 * @package bedezign\yii2\audit
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        // Make sure to register the base folder as alias as well or things like assets won't work anymore
        \Yii::setAlias('@catcoderphp/usermonitor', __DIR__);

        $moduleName = UserMonitor::findModuleIdentifier();
        if ($moduleName) {
            // The module was added in the configuration, make sure to add it to the application bootstrap so it gets loaded
            $app->bootstrap[] = $moduleName;
            $app->bootstrap = array_unique($app->bootstrap, SORT_REGULAR);
        }

    }
}