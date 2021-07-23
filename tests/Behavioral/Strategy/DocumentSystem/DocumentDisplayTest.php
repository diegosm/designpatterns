<?php

declare(strict_types=1);

namespace Tests\Behavioral\Strategy\DocumentSystem;

use DesignPatterns\Behavioral\Strategy\DocumentSystem\Document;
use DesignPatterns\Behavioral\Strategy\DocumentSystem\DocumentConcrete;
use DesignPatterns\Behavioral\Strategy\DocumentSystem\DocumentDisplay;
use DesignPatterns\Behavioral\Strategy\DocumentSystem\HTMLPresenter;
use DesignPatterns\Behavioral\Strategy\DocumentSystem\XMLPresenter;
use PHPUnit\Framework\TestCase;

class DocumentDisplayTest extends TestCase
{
    public function testShouldPrintInHTMLFormat()
    {
        $display = new DocumentDisplay(
            new DocumentConcrete('My Title', 'Hello World'),
            new HTMLPresenter
        );

        $this->assertEquals(
            <<<EOF
<html>
    <head>
        <title>My Title</title>
    </head>
    <body>
        Hello World
    </body>
</html>
EOF,
            $display->display()
        );
    }

    public function testShouldPrintInXMLFormat()
    {
        $display = new DocumentDisplay(
            new DocumentConcrete('My Title', 'Hello World'),
            new XMLPresenter
        );

        $this->assertEquals(
            <<<EOF
<document>
    <title>My Title</title>
    <description>Hello World</description>
</document>
EOF,
            $display->display()
        );
    }
}
