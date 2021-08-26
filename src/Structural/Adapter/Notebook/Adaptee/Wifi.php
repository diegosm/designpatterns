<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Adaptee;

class Wifi
{
    public function connect(): string
    {
        return "WIFI connected.";
    }
}
