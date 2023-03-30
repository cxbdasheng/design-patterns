<?php

namespace cxbdasheng\DesignPatterns\TemplateMethod;

/**
 * 三星
 */
class Samsung extends Memory
{
    public function brand():string
    {
        return '三星(Samsung)';
    }

    public function size():string
    {
        return '16 Gb';
    }
}