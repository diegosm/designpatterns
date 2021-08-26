<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Adaptee;

class Smartphone
{
    public function start(): string
    {
        return "Smartphone connected.";
    }
}
