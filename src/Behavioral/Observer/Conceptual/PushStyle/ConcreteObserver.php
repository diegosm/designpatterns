<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\Conceptual\PushStyle;

use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\Contracts\Observer;
use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\Contracts\SubjectState;

class ConcreteObserver implements Observer
{
    protected string $observerState = '';

    public function __construct(public string $name)
    {
    }

    public function update(SubjectState $subjectState): void
    {
        $this->observerState = $subjectState->getState() . ' ' . $this->name;
    }

    public function getObserverState(): string
    {
        return $this->observerState;
    }
}
