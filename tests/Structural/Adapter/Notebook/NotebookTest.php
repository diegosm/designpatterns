<?php

declare(strict_types=1);

namespace Tests\Structural\Adapter\Notebook;

use DesignPatterns\Structural\Adapter\Notebook\Adaptee\Monitor;
use DesignPatterns\Structural\Adapter\Notebook\Adaptee\Smartphone;
use DesignPatterns\Structural\Adapter\Notebook\Adaptee\Wifi;
use DesignPatterns\Structural\Adapter\Notebook\Adapters\MonitorAdapter;
use DesignPatterns\Structural\Adapter\Notebook\Adapters\SmartphoneAdapter;
use DesignPatterns\Structural\Adapter\Notebook\Adapters\WifiAdapter;
use DesignPatterns\Structural\Adapter\Notebook\Notebook;
use PHPUnit\Framework\TestCase;

class NotebookTest extends TestCase
{
    protected Notebook $notebook;

    protected function setUp(): void
    {
        parent::setUp();
        $this->notebook = new Notebook();
    }

    public function testItCanUseMonitor()
    {
        $result = $this->notebook->port(
            new MonitorAdapter(
                new Monitor()
            )
        );

        $this->assertEquals("Monitor connected.", $result);
    }

    public function testItCanUseSmartphone()
    {
        $result = $this->notebook->port(
            new SmartphoneAdapter(
                new Smartphone()
            )
        );

        $this->assertEquals("Smartphone connected.", $result);
    }

    public function testItCanUseWifi()
    {
        $result = $this->notebook->port(
            new WifiAdapter(
                new Wifi()
            )
        );

        $this->assertEquals("WIFI connected.", $result);
    }
}
