<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Util\Message\Serialization\JsonApi;

use Forkrefactor\Ddd\Util\Message\AggregateMessage;
use Forkrefactor\Ddd\Util\Message\Serialization\AggregateMessageSerializable;

final class AggregateMessageJsonApiSerializable implements AggregateMessageSerializable
{
    public function serialize(AggregateMessage $message)
    {
        return \json_encode(
            [
                'data' => [
                    'message_id' => $message->messageId(),
                    'type' => $message::messageName(),
                    'occurred_on' => $message->occurredOn()->getTimestamp(),
                    'attributes' => \array_merge(
                        ['aggregate_id' => $message->aggregateId()->value()],
                        $message->messagePayload(),
                    ),
                ],
            ],
            \JSON_THROW_ON_ERROR,
            512,
        );
    }
}
