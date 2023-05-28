<?php

use yii\caching\FileCache;
use yii\log\FileTarget;

$params = require __DIR__ . '/params.php';

return [
    'id' => 'minimal-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'controllerMap' => require __DIR__ . '/controller-map.php',
    'container' => require __DIR__ . '/container.php',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@db' => $params['db.path'],
    ],
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
        'log' => [
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require __DIR__ . '/db.php',
    ],
    'params' => $params,
];
