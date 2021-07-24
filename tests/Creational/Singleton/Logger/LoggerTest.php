<?php

declare(strict_types=1);

namespace Tests\Creational\Singleton\Logger;

use DesignPatterns\Creational\Singleton\Logger\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testItShouldBringTheSameInstance()
    {
        $logger = Logger::getInstance();
        $logger2 = Logger::getInstance();

        $this->assertEquals($logger, $logger2);
    }
}
