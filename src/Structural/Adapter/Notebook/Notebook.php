<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Notebook;

use DesignPatterns\Structural\Adapter\Notebook\Contracts\USBC;

class Notebook
{
    public function port(USBC $usbc): string
    {
        return $usbc->execute();
    }
}
