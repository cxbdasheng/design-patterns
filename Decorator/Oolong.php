<?php

namespace cxbdasheng\DesignPatterns\Decorator;

/**
 * 声声乌龙
 */
class Oolong implements MilkTea
{
    public function name()
    {
        return '声声乌龙';
    }

    public function price()
    {
        return 16;
    }
}