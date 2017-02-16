User monitor
============
Save logs of user activity on the site

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist catcoderphp/usermonitor "*"
```

or add

```
"catcoderphp/usermonitor": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, modify your config file like this:

```php
<?php
$config = [
    'bootstrap' => ['log','usermonitor'],
        'modules' =>[
            'usermonitor' => [
                'class' => 'catcoderphp\usermonitor\UserMonitor',
                'userIp' => $_SERVER["REMOTE_ADDR"],
                "applicationIdentifier" => "MY APP",
                "currentURI" => $_SERVER["REQUEST_URI"],
                "eventName" => "SOME EVENT NAME TO SAVE ON DB",
                "databaseEngine" => [
                    //if is false, the module use the yii's active record by default
                    "mongo_active_record" => true,
                ],
                "userModel" => [
                    //CLASS, the class namespace when you can get your user's info; by example...
                    "class" => \app\models\User::class,
                    //FIEL, the field to identify your user
                    "field" => "email"
                ]
            ]
        ],
    ];
```