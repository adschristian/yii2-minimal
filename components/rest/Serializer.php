<?php

declare(strict_types=1);

namespace app\components\rest;

use yii\rest\Serializer as YiiSerializer;

class Serializer extends YiiSerializer
{
    public function serialize($data)
    {
        if (is_string($data)) {
            return $this->serializeString($data);
        }

        return parent::serialize($data);
    }

    protected function serializeString($data)
    {
        return [
            'message' => $data,
        ];
    }
}
