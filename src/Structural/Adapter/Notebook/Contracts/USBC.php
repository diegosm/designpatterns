<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook\Contracts;

interface USBC
{
    public function execute(): string;
}
