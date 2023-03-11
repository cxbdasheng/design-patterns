<?php

namespace cxbdasheng\DesignPatterns\Decorator;

class Decorator implements MilkTea
{
    protected $milkTea;

    public function __construct(MilkTea $milkTea)
    {
        $this->milkTea = $milkTea;
    }

    public function name()
    {
        if ($this->milkTea != null) {
            return $this->milkTea->name();
        }
        return '';
    }

    public function price()
    {
        if ($this->milkTea != null) {
            return $this->milkTea->price();
        }
        return 0;
    }
}