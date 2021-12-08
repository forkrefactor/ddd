<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Util\Message\Serialization;

use Forkrefactor\Ddd\Util\Message\SimpleMessage;

interface SimpleMessageUnserializable
{
    public function unserialize($message): SimpleMessage;
}
