<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Application;

use Forkrefactor\Ddd\Util\Message\SimpleMessage;

abstract class Command extends SimpleMessage
{
    final public static function messageType(): string
    {
        return 'command';
    }
}
