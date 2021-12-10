<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\Conceptual\PushStyle\Contracts;

abstract class SubjectState
{
    public function __construct(protected string $state)
    {
    }

    public function getState() : string
    {
        return $this->state;
    }
}
