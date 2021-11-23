<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Factories;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\DisplayInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\MemoryInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\NotebookAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\ProcessorInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Displays\Display15;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Memories\Memory32Gb;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Processors\I9;

class Notebook3 implements NotebookAbstractFactory
{
    public function createMemory(): MemoryInterface
    {
        return new Memory32Gb();
    }

    public function createDisplay(): DisplayInterface
    {
        return new Display15();
    }

    public function createProcessor(): ProcessorInterface
    {
        return new I9();
    }
}
