<?php


namespace cxbdasheng\DesignPatterns\Flyweight;


/**
 * 弹片
 * Class Shrapnel
 * @package cxbdasheng\DesignPatterns\Flyweight
 */
class Shrapnel extends Bullet
{
    public function run($coords)
    {
        echo '弹片位置在：' . $coords;
    }
}