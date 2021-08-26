<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Adapters;

use DesignPatterns\Structural\Adapter\Notebook\Adaptee\Wifi;
use DesignPatterns\Structural\Adapter\Notebook\Contracts\USBC;

class WifiAdapter implements USBC
{
    private Wifi $wifi;

    public function __construct(Wifi $wifi)
    {
        $this->wifi = $wifi;
    }

    public function execute(): string
    {
        return $this->wifi->connect();
    }
}
