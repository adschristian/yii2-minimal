<?php

declare(strict_types=1);

namespace app\components\db;

use yii\db\ActiveQuery as YiiActiveQuery;
use yii\db\ActiveRecord;

/**
 * @property ActiveRecord&string $modelClass
 */
class ActiveQuery extends YiiActiveQuery
{
    use IDTrait;

    /**
     * @return string
     */
    public function tableName()
    {
        return $this->modelClass::tableName();
    }
}
