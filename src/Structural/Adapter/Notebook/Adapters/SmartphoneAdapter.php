<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Adapters;

use DesignPatterns\Structural\Adapter\Notebook\Adaptee\Smartphone;
use DesignPatterns\Structural\Adapter\Notebook\Contracts\USBC;

class SmartphoneAdapter implements USBC
{
    private Smartphone $smartphone;

    public function __construct(Smartphone $smartphone)
    {
        $this->smartphone = $smartphone;
    }

    public function execute(): string
    {
        return $this->smartphone->start();
    }
}
