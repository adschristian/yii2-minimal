<?php

declare(strict_types=1);

namespace app\components\db;

trait IDTrait
{
    public function id(?string $id): static
    {
        /** @var ActiveQuery $this */

        return $this->andOnCondition([
            $this->tableName() . '.[[id]]' => $id
        ]);
    }
}
