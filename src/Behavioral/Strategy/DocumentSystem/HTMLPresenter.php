<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\DocumentSystem;

class HTMLPresenter implements Presenter
{
    public function display(Document $document)
    {
        return <<<EOF
<html>
    <head>
        <title>{$document->getTitle()}</title>
    </head>
    <body>
        {$document->getDescription()}
    </body>
</html>
EOF;
    }
}
