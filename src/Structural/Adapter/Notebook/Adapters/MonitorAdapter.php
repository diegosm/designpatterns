<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Adapters;

use DesignPatterns\Structural\Adapter\Notebook\Adaptee\Monitor;
use DesignPatterns\Structural\Adapter\Notebook\Contracts\USBC;

class MonitorAdapter implements USBC
{
    private Monitor $monitor;

    public function __construct(Monitor $monitor)
    {
        $this->monitor = $monitor;
    }

    public function execute(): string
    {
        return $this->monitor->display();
    }
}
