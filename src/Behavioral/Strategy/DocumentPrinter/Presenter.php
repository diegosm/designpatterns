<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\DocumentPrinter;

interface Presenter
{
    public function display(Document $document);
}
