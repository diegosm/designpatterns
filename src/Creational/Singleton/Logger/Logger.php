<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton\Logger;

class Logger
{
    private static $instance = null;

    private function __construct()
    {
        // doesnt have access from outside
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
