<?php

namespace cxbdasheng\DesignPatterns\Decorator;

/**
 * 开心果
 */
class Pistachio extends Decorator
{
    public function name()
    {
        return $this->milkTea->name() . '+ 开心果';
    }

    public function price()
    {
        return $this->milkTea->price() + 4;
    }
}