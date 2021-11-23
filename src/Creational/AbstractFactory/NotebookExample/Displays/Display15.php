<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Displays;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\DisplayInterface;

class Display15 implements DisplayInterface
{
    public function getName(): string
    {
        return "15 Display";
    }
}
