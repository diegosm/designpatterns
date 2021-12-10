<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\Conceptual\PullStyle\Contracts;

interface Observer
{
    public function update() : void;
}
