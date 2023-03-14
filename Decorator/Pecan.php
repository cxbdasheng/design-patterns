<?php

namespace cxbdasheng\DesignPatterns\Decorator;

/**
 * 碧根果
 */
class Pecan extends Decorator
{
    public function name()
    {
        return $this->milkTea->name() . '+ 碧根果';
    }

    public function price()
    {
        return $this->milkTea->price() + 2;
    }
}