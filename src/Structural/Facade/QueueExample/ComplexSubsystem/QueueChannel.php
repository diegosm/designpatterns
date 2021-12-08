<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\QueueExample\ComplexSubsystem;

class QueueChannel
{
    public function __construct(private QueueConnection $connection, public string $channel)
    {
    }

    public function getConnection(): QueueConnection
    {
        return $this->connection;
    }

    public function send(QueueMessage $message): string
    {
        return $this->connection->send($message->getPayload());
    }
}
