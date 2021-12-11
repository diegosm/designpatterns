<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer\NewsStation;

use DesignPatterns\Behavioral\Observer\NewsStation\Contracts\Observer;

class Radio implements Observer
{
    public string $observerState = '';

    public function __construct(public Deuters $deuters, public string $name)
    {
    }

    public function update(): void
    {
        $this->setObserverState($this->getName() . ' - ' . $this->getDeuters()->getSubjectState());
    }

    public function getObserverState(): string
    {
        return $this->observerState;
    }

    public function setObserverState(string $observerState): void
    {
        $this->observerState = $observerState;
    }

    public function getDeuters(): Deuters
    {
        return $this->deuters;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
