<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Processors;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\ProcessorInterface;

class I7 implements ProcessorInterface
{
    public function getName(): string
    {
        return "I7";
    }
}
