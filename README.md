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

Once the extension is installed, simply use it in your code by  :

```php
<?= \catcoderphp\usermonitor\AutoloadExample::widget(); ?>```