<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\DocumentPrinter;

interface Document
{
    public function getTitle(): string;

    public function getDescription(): string;
}
