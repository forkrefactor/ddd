<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Tests\Domain\Model;

use Forkrefactor\Ddd\Domain\Model\AggregateRoot;
use Forkrefactor\Ddd\Domain\Model\DomainEvent;
use Forkrefactor\Ddd\Domain\Model\ValueObject\Uuid;

class AggregateRootTested extends AggregateRoot
{
    private $applyDomainEventTestedEvent;

    public static function test(Uuid $aggregateId, int $aggregateVersion): self
    {
        return new self($aggregateId, $aggregateVersion);
    }

    public static function modelName(): string
    {
        return 'example';
    }

    public function jsonSerialize(): mixed
    {
        return [];
    }

    public function doAction(DomainEvent $event): void
    {
        $this->recordThat($event);
    }

    public function applyDomainEventTested(DomainEventTested $event): void
    {
        $this->applyDomainEventTestedEvent = $event;
    }

    public function applyDomainEventTestedEvent(): DomainEvent
    {
        return $this->applyDomainEventTestedEvent;
    }
}
