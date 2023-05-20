<?php

declare(strict_types=1);

namespace app\components\db;

use yii\base\Event;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\AttributeTypecastBehavior as TypecastBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord as YiiActiveRecord;

/**
 * @method touch($attribute)
 */
class ActiveRecord extends YiiActiveRecord
{
    public function formName()
    {
        return '';
    }

    public function behaviors()
    {
        return [
            'idAttributeBehavior' => [
                'class' => AttributeBehavior::class,
                'value' => fn (Event $e) => md5(uniqid((string) rand(), true)),
                'attributes' => [
                    static::EVENT_BEFORE_INSERT => ['id'],
                ]
            ],
            'timestampBehavior' => [
                'class' => TimestampBehavior::class,
            ],
            'typecastBehavior' => [
                'class' => TypecastBehavior::class,
            ],
        ];
    }
}
