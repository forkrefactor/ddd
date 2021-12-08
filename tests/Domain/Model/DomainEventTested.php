<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Tests\Domain\Model;

use Forkrefactor\Ddd\Domain\Model\DomainEvent;
use Forkrefactor\Ddd\Domain\Model\ValueObject\DateTimeValueObject;
use Forkrefactor\Ddd\Domain\Model\ValueObject\Uuid;

class DomainEventTested extends DomainEvent
{
    private $assertPayloadCalled;

    public static function test(
        Uuid $messageId,
        Uuid $aggregateId,
        int $aggregateVersion,
        DateTimeValueObject $occurredOn,
        array $payload
    ): self {
        $event = new self($messageId, $aggregateId, $aggregateVersion, $occurredOn, $payload);
        $event->assertPayloadCalled = false;

        return $event;
    }

    protected function assertPayload(): void
    {
        $this->assertPayloadCalled = true;
    }

    public static function messageName(): string
    {
        return 'example';
    }

    public static function messageVersion(): string
    {
        return 'example';
    }

    public function assertPayloadCalled(): bool
    {
        return $this->assertPayloadCalled;
    }
}
