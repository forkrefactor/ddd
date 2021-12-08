<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Tests\Domain\Model\ValueObject;

use Forkrefactor\Ddd\Domain\Model\ValueObject\CollectionValueObject;

class CollectionValueObjectTested extends CollectionValueObject
{
    public function add($item)
    {
        return $this->addItem($item);
    }

    public function remove($item)
    {
        return $this->removeItem($item);
    }

    public function firstItem()
    {
        return $this->first();
    }
}
