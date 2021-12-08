<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Domain\Exception;

abstract class DomainException extends \Exception implements \JsonSerializable
{
}
