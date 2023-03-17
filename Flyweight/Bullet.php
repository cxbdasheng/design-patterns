<?php


namespace cxbdasheng\DesignPatterns\Flyweight;

/**
 * 弹类抽象基类
 * Class Bullet
 * @package cxbdasheng\DesignPatterns\Flyweight
 */
abstract class Bullet
{
    protected string $color;
    protected string $background;
    protected string $no;

    /**
     * 不同类型的弹类初始化
     * Bullet constructor.
     * @param string $color
     * @param string $background
     */
    public function __construct(string $color, string $background)
    {
        $this->color = $color;
        $this->background = $background;
        $this->no = md5($color . $background);
    }

    abstract public function run($coords);
}