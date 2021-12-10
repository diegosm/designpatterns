<?php

namespace DesignPatterns\Behavioral\Observer\Conceptual\PushStyle;

use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\Contracts\Subject;
use DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\Contracts\SubjectState;

class ConcreteSubject extends Subject
{
    protected SubjectState $subjectState;

    public function setState(SubjectState $subjectState) : void
    {
        $this->subjectState = $subjectState;
        $this->notify();
    }

    public function getState(): SubjectState
    {
        return $this->subjectState;
    }
}
