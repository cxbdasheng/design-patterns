<?php

namespace cxbdasheng\DesignPatterns\Observer;

abstract class Subscriber
{
    /**
     * @var string 订阅者姓名
     */
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function update();
}