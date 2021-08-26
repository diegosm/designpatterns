<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Adaptee;

class Monitor
{
    public function display(): string
    {
        return "Monitor connected.";
    }
}
