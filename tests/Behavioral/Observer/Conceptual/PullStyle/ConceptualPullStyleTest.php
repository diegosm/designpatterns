<?php

declare(strict_types=1);

namespace Tests\Behavioral\Observer\Conceptual\PullStyle;

use DesignPatterns\Behavioral\Observer\Conceptual\PullStyle\ConcreteObserver;
use DesignPatterns\Behavioral\Observer\Conceptual\PullStyle\ConcreteSubject;
use PHPUnit\Framework\TestCase;

class ConceptualPullStyleTest extends TestCase
{
    public function testItCanTestSubjectNotification()
    {
        $subject = new ConcreteSubject();
        $subject->attach($observerA = new ConcreteObserver($subject, 'A'));
        $subject->attach($observerB = new ConcreteObserver($subject, 'B'));
        $subject->attach($observerC = new ConcreteObserver($subject, 'C'));

        $subject->setState('New state');

        $this->assertEquals('New state - A', $observerA->getObserverState());
        $this->assertEquals('New state - B', $observerB->getObserverState());
        $this->assertEquals('New state - C', $observerC->getObserverState());

        $subject->detach($observerC);
        $subject->setState('Awesome');

        $this->assertEquals('Awesome - A', $observerA->getObserverState());
        $this->assertEquals('Awesome - B', $observerB->getObserverState());

        // this should NOT be updated to new status
        $this->assertEquals('New state - C', $observerC->getObserverState());
    }
}
