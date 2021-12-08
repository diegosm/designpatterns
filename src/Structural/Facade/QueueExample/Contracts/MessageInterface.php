<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\QueueExample\Contracts;

interface MessageInterface
{
    public function getPayload(): string;
}
