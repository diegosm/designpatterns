<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Factories;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\DisplayInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\MemoryInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\NotebookAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\ProcessorInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Displays\Display13;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Memories\Memory8Gb;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Processors\I7;

class Notebook1 implements NotebookAbstractFactory
{
    public function createMemory(): MemoryInterface
    {
        return new Memory8Gb();
    }

    public function createDisplay(): DisplayInterface
    {
        return new Display13();
    }

    public function createProcessor(): ProcessorInterface
    {
        return new I7();
    }
}
