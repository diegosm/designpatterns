<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\NewsStation\Contracts;

interface Observer
{
    public function update(): void;
}
