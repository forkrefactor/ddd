<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Infrastructure\Repository;

use Forkrefactor\Ddd\Domain\Model\Snapshot;
use Forkrefactor\Ddd\Domain\Model\ValueObject\Uuid;

interface SnapshotStoreRepository
{
    public function set(Snapshot $snapshot): void;

    public function get(Uuid $aggregateId): ?Snapshot;

    public function remove(Snapshot $snapshot): void;
}
