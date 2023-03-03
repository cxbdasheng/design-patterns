<?php

namespace cxbdasheng\DesignPatterns\Bridge;

use cxbdasheng\DesignPatterns\Bridge\ColorInterface;

abstract class CaseAbstract
{
    /**
     * 颜色
     * @var \cxbdasheng\DesignPatterns\Bridge\ColorInterface
     */
    protected $color;

    /**
     * 运行机箱
     * @return mixed
     * @author chendashengpc
     */
    abstract public function run();

    /**
     * 依赖注入
     * @param \cxbdasheng\DesignPatterns\Bridge\ColorInterface $color
     */
    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }

}