<?php

namespace DesignPatterns\Behavioral\Observer\NewsStation\Contracts;

abstract class Subject
{
    private array $observers = [];

    public function attach(Observer $observer) : void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $removable) : void
    {
        $this->observers = array_filter($this->observers, function ($observer) use ($removable) {
            return $observer !== $removable;
        });
    }

    public function notify() : void
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
