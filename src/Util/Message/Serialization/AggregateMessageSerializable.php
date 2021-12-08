<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Util\Message\Serialization;

use Forkrefactor\Ddd\Util\Message\AggregateMessage;

interface AggregateMessageSerializable
{
    public function serialize(AggregateMessage $message);
}
