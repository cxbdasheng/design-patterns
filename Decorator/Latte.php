<?php

namespace cxbdasheng\DesignPatterns\Decorator;

/**
 * 幽兰拿铁
 */
class Latte implements MilkTea
{
    public function name()
    {
        return '幽兰拿铁';
    }

    public function price()
    {
        return 17;
    }
}