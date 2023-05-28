<?php

use yii\console\controllers\MigrateController;

return [
    'migrate' => [
        'class' => MigrateController::class,
        'migrationPath' => [
            '@app/migrations',
        ],
    ],
];
