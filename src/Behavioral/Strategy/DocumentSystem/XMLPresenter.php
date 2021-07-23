<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\DocumentSystem;

class XMLPresenter implements Presenter
{
    public function display(Document $document)
    {
        return <<<EOF
<document>
    <title>{$document->getTitle()}</title>
    <description>{$document->getDescription()}</description>
</document>
EOF;
    }
}
