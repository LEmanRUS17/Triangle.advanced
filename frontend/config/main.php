<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'language'     => 'ru-RU',          // Язык
    'name'         => 'Triangle',       // Название сайта
    'defaultRoute' => 'site/index',     // Дефолтный маршрут при запуске сайта
    'basePath' => dirname(__DIR__),
    'layout'       => 'main',           // Шаблон по умолчанию
    'bootstrap' => [
        'log',
        'app\modules\blog\Bootstrap',
    ],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'blog' => [
            'class' => 'app\modules\blog\Module',
        ],
    ],
    'components' => [

        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false, // Включить строгий разбор UPL. https://www.yiiframework.com/doc/api/2.0/yii-web-urlmanager#$enableStrictParsing-detail
            'rules' => [
                '/' => 'site/index',
                'blog' => 'blog/default/index',
            ],
        ],
    ],
    'params' => $params,
];
