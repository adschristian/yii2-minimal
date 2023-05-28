<?php

use app\components\filters\ContentNegotiator;
use app\components\web\Request;
use yii\caching\FileCache;
use yii\log\FileTarget;

$params = require __DIR__ . '/params.php';

$config = [
    'id' => env('APP_ID', 'minimal'),
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        [
            'class' => ContentNegotiator::class,
        ]
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@db' => $params['db.path'],
    ],
    'controllerNamespace' => 'app\controllers',
    'container' => require __DIR__ . '/container.php',
    'components' => [
        'request' => [
            'class' => Request::class,
        ],
        'cache' => [
            'class' => FileCache::class,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require __DIR__ . '/db.php',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => require __DIR__ . '/routes.php',
        ],
    ],
    'params' => $params,
];

return $config;
