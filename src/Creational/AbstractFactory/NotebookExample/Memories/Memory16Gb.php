<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Memories;

use DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts\MemoryInterface;

class Memory16Gb implements MemoryInterface
{
    public function getName(): string
    {
        return "16Gb";
    }
}
