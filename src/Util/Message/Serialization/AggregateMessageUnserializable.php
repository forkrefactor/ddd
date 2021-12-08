<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Util\Message\Serialization;

use Forkrefactor\Ddd\Util\Message\AggregateMessage;

interface AggregateMessageUnserializable
{
    public function unserialize($message): AggregateMessage;
}
