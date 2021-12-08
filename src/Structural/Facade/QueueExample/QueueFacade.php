<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\QueueExample;

use DesignPatterns\Structural\Facade\QueueExample\ComplexSubsystem\QueueChannel;
use DesignPatterns\Structural\Facade\QueueExample\ComplexSubsystem\QueueConnection;
use DesignPatterns\Structural\Facade\QueueExample\ComplexSubsystem\QueueMessage;

class QueueFacade
{
    private QueueConnection $connection;

    public function __construct()
    {
        $this->connection = new QueueConnection('localhost', 12345);
    }

    public function sendMessage(string $channel, string $message): string
    {
        $channel = new QueueChannel($this->connection, $channel);

        $message = $channel->send(
            new QueueMessage($message)
        );

        $this->connection->close();

        return $message;
    }
}
