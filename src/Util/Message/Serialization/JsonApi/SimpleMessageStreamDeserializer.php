<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Util\Message\Serialization\JsonApi;

use Forkrefactor\Ddd\Domain\Model\ValueObject\Uuid;
use Forkrefactor\Ddd\Util\Message\Serialization\Exception\MessageClassNotFoundException;
use Forkrefactor\Ddd\Util\Message\Serialization\MessageMappingRegistry;
use Forkrefactor\Ddd\Util\Message\Serialization\SimpleMessageUnserializable;
use Forkrefactor\Ddd\Util\Message\SimpleMessage;

final class SimpleMessageStreamDeserializer implements SimpleMessageUnserializable
{
    private MessageMappingRegistry $registry;

    public function __construct(MessageMappingRegistry $registry)
    {
        $this->registry = $registry;
    }

    public function unserialize($message): SimpleMessage
    {
        if (false === $message instanceof SimpleMessageStream) {
            throw new \LogicException(self::class . ' only works with ' . SimpleMessageStream::class);
        }

        $messageClass = ($this->registry)($message->messageName());

        if (null === $messageClass || false === \class_exists($messageClass)) {
            throw new MessageClassNotFoundException(\sprintf('Message %s not found', $message->messageName()));
        }

        return $messageClass::fromPayload(
            Uuid::from($message->messageId()),
            \json_decode(
                $message->payload(),
                true,
                512,
                \JSON_THROW_ON_ERROR,
            ),
        );
    }
}
