<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\NewsStation;

use DesignPatterns\Behavioral\Observer\NewsStation\Contracts\Subject;

class Deuters extends Subject
{
    private string $subjectState = '';

    public function getSubjectState(): string
    {
        return $this->subjectState;
    }

    public function setSubjectState(string $subjectState): void
    {
        $this->subjectState = $subjectState;
        $this->notify();
    }
}
