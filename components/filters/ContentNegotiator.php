<?php

declare(strict_types=1);

namespace app\components\filters;

use yii\web\Response;
use yii\filters\ContentNegotiator as YiiContentNegotiator;

class ContentNegotiator extends YiiContentNegotiator
{
    public $languages = ['pt-BR', 'pt', 'en', 'en-US'];
    public $formats = [
        'application/json' => Response::FORMAT_JSON,
        'application/xml' => Response::FORMAT_XML,
    ];
}
