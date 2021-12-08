<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\QueueExample\ComplexSubsystem;

class QueueConnection
{
    private string $status;
    private string $connection;

    public const CONNECTION_OPENED = 'opened';
    public const CONNECTION_CLOSED = 'closed';

    public function __construct(private string $host, private int $port)
    {
        $this->connect($this->host, $this->port);
    }

    public function connect(string $host, int $port): void
    {
        $this->status = self::CONNECTION_OPENED;
    }

    public function send(string $payload): string
    {
        return $payload;
    }

    public function close(): void
    {
        $this->status = self::CONNECTION_CLOSED;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
