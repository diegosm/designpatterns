<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\Conceptual\PullStyle;

use DesignPatterns\Behavioral\Observer\Conceptual\PullStyle\Contracts\Observer;

class ConcreteObserver implements Observer
{
    private string $observerState = '';

    public function __construct(public ConcreteSubject $concreteSubject, public string $name)
    {
    }

    public function update() : void
    {
        $this->observerState = $this->concreteSubject->getState() . ' - ' . $this->name;
    }

    public function getObserverState() : string
    {
        return $this->observerState;
    }
}
