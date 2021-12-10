<?php

namespace DesignPatterns\Behavioral\Observer\Conceptual\PullStyle;

use DesignPatterns\Behavioral\Observer\Conceptual\PullStyle\Contracts\Subject;

class ConcreteSubject extends Subject
{
    protected string $subjectState = '';

    public function setState(string $state) : void
    {
        $this->subjectState = $state;
        $this->notify();
    }

    public function getState() : string
    {
        return $this->subjectState;
    }
}
