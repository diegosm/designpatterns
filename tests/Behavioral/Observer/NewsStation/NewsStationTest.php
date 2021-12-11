<?php

declare(strict_types=1);

namespace Tests\Behavioral\Observer\NewsStation;

use DesignPatterns\Behavioral\Observer\NewsStation\Deuters;
use DesignPatterns\Behavioral\Observer\NewsStation\Radio;
use DesignPatterns\Behavioral\Observer\NewsStation\TV;
use PHPUnit\Framework\TestCase;

class NewsStationTest extends TestCase
{
    public function testItCanNotifyObservers(): void
    {
        $subject = new Deuters();

        $radio   = new Radio($subject, 'Radio 081');
        $subject->attach($radio);

        $tv      = new TV($subject, 'TV News');
        $subject->attach($tv);

        $subject->setSubjectState('Here is the first news.');

        $this->assertEquals('Radio 081 - Here is the first news.', $radio->getObserverState());
        $this->assertEquals('TV News - Here is the first news.', $tv->getObserverState());

        $subject->detach($tv);

        $subject->setSubjectState('Here is another news.');
        $this->assertEquals('TV News - Here is the first news.', $tv->getObserverState());

        $this->assertEquals('Radio 081 - Here is another news.', $radio->getObserverState());
    }
}
