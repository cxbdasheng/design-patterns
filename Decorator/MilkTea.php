<?php

namespace cxbdasheng\DesignPatterns\Decorator;

/**
 * 奶茶
 */
interface MilkTea
{
    /**
     * 名称
     * @return mixed
     */
    public function name();

    /**
     * 价格
     * @return mixed
     */
    public function price();
}