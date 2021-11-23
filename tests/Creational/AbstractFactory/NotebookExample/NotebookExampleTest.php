<?php

declare(strict_types=1);

namespace Tests\Creational\AbstractFactory\NotebookExample;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\DisplayInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\MemoryInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\NotebookAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\ProcessorInterface;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Factories\Notebook1;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Factories\Notebook2;
use DesignPatterns\Creational\AbstractFactory\NotebookExample\Factories\Notebook3;
use PHPUnit\Framework\TestCase;

class NotebookExampleTest extends TestCase
{
    public function dataProvider(): array
    {
        return [
            [
                new Notebook1()
            ],
            [
                new Notebook2()
            ],
            [
                new Notebook3()
            ]
        ];
    }

    /**
     * @param NotebookAbstractFactory $factory
     * @dataProvider dataProvider
     */
    public function testItCanCreateNotebooks(NotebookAbstractFactory $factory)
    {
        $this->assertInstanceOf(MemoryInterface::class, $factory->createMemory());
        $this->assertInstanceOf(DisplayInterface::class, $factory->createDisplay());
        $this->assertInstanceOf(ProcessorInterface::class, $factory->createProcessor());
    }
}
