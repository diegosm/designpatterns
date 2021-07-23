<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\DocumentSystem;

class DocumentDisplay
{
    private Document $document;
    private Presenter $presenter;

    public function __construct(Document $document, Presenter $presenter)
    {
        $this->document = $document;
        $this->presenter = $presenter;
    }

    public function display()
    {
        return $this->presenter->display($this->document);
    }
}
