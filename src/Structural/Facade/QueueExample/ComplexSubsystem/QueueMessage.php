<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\QueueExample\ComplexSubsystem;

use DesignPatterns\Structural\Facade\QueueExample\Contracts\MessageInterface;

class QueueMessage implements MessageInterface
{
    public function __construct(private string $payload)
    {
    }

    public function getPayload(): string
    {
        return $this->payload;
    }
}
