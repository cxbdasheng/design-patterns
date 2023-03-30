<?php

namespace cxbdasheng\DesignPatterns\TemplateMethod;

/**
 * 金士顿
 */
class Kingston extends Memory
{
    public function brand(): string
    {
        return '金士顿(Kingston)';
    }

    public function size(): string
    {
        return '8 Gb';
    }

    public function particles(): string
    {
        return 'MLC';
    }
}