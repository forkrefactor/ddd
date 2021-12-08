<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Util\Message\Serialization;

use Forkrefactor\Ddd\Util\Message\SimpleMessage;

interface SimpleMessageSerializable
{
    public function serialize(SimpleMessage $message);
}
