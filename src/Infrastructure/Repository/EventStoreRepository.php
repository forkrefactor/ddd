<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Infrastructure\Repository;

use Forkrefactor\Ddd\Domain\Model\DomainEvent;
use Forkrefactor\Ddd\Domain\Model\ValueObject\DateTimeValueObject;
use Forkrefactor\Ddd\Domain\Model\ValueObject\Uuid;

interface EventStoreRepository
{
    public function add(DomainEvent ...$events): void;

    public function get(Uuid $aggregateId): array;

    public function getSince(Uuid $aggregateId, DateTimeValueObject $since): array;

    public function getByMessageId(Uuid $messageId): ?DomainEvent;

    public function getByMessageName(string $messageName): array;

    public function getByMessageNameSince(string $messageName, DateTimeValueObject $since): array;
}
