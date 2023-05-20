<?php

declare(strict_types=1);

namespace app\components\web;

use yii\web\JsonParser;
use yii\web\Request as YiiRequest;

class Request extends YiiRequest
{
    public $enableCookieValidation = false;
    public $enableCsrfCookie = false;
    public $enableCsrfValidation = false;
    public $parsers = [
        'application/json' => JsonParser::class,
    ];
}
