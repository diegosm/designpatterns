<?php

declare(strict_types=1);

namespace Tests\Structural\Facade\QueueExample;

use DesignPatterns\Structural\Facade\QueueExample\QueueFacade;
use PHPUnit\Framework\TestCase;

class QueueExampleTest extends TestCase
{
    public function testItCanSendMessage()
    {
        $queue = new QueueFacade();

        $message = $queue->sendMessage('My Channel', 'Message payload');

        $this->assertEquals('Message payload', $message);
    }
}
