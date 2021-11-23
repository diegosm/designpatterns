<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Displays;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\DisplayInterface;

class Display13 implements DisplayInterface
{
    public function getName(): string
    {
        return "13 Display";
    }
}
