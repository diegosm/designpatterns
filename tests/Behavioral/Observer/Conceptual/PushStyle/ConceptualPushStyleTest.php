<?php

namespace Tests\Behavioral\Observer\Conceptual\PushStyle;

use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\ConcreteObserver;
use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\ConcreteSubject;
use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\ConcreteSubjectState;
use PHPUnit\Framework\TestCase;

class ConceptualPushStyleTest extends TestCase
{
    public function testItCanTestSubjectNotification()
    {
        $subject   = new ConcreteSubject();
        $observer1 = new ConcreteObserver('O1');
        $observer2 = new COncreteObserver('O2');

        $subject->attach($observer1);
        $subject->attach($observer2);

        $subject->setState(new ConcreteSubjectState('Hello World'));

        $this->assertEquals('Hello World O1', $observer1->getObserverState());
        $this->assertEquals('Hello World O2', $observer2->getObserverState());

        $subject->detach($observer2);

        $subject->setState(new ConcreteSubjectState('Awesome example'));
        $this->assertEquals('Awesome example O1', $observer1->getObserverState());
        $this->assertEquals('Hello World O2', $observer2->getObserverState());
    }
}
