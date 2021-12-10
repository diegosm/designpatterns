<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\Contracts;

interface Observer
{
    public function update(SubjectState $subjectState) : void;
}
