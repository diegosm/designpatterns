<?php

declare(strict_types=1);

namespace Tests\Behavioral\Strategy\DocumentPrinter;

use DesignPatterns\Behavioral\Strategy\DocumentPrinter\Document;
use DesignPatterns\Behavioral\Strategy\DocumentPrinter\DocumentConcrete;
use DesignPatterns\Behavioral\Strategy\DocumentPrinter\DocumentDisplay;
use DesignPatterns\Behavioral\Strategy\DocumentPrinter\HTMLPresenter;
use DesignPatterns\Behavioral\Strategy\DocumentPrinter\Presenter;
use DesignPatterns\Behavioral\Strategy\DocumentPrinter\XMLPresenter;
use PHPUnit\Framework\TestCase;

class DocumentDisplayTest extends TestCase
{
    public function testShouldHaveDocumentOutput()
    {
        $document = $this->createMock(Document::class);
        $presenter = $this->createMock(Presenter::class);

        $display   = new DocumentDisplay($document, $presenter);

        $this->assertInstanceOf(DocumentDisplay::class, $display);
    }

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
