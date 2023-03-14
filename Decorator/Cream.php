<?php

namespace cxbdasheng\DesignPatterns\Decorator;
/**
 * 奶油
 */
class Cream extends Decorator
{
    public function name()
    {
        return $this->milkTea->name() . '+ 奶油';
    }

    public function price()
    {
        return $this->milkTea->price() + 4;
    }
}