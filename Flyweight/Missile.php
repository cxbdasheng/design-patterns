<?php


namespace cxbdasheng\DesignPatterns\Flyweight;

/**
 * 导弹
 * Class Missile
 * @package cxbdasheng\DesignPatterns\Flyweight
 */
class Missile extends Bullet
{
    public function run($coords)
    {
        echo '导弹位置在：' . $coords;
    }
}