<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Domain\Model;

use Forkrefactor\Ddd\Util\Message\AggregateMessage;

abstract class DomainEvent extends AggregateMessage
{
    final public static function messageType(): string
    {
        return 'domain_event';
    }
}
