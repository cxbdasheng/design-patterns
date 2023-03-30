<?php

namespace cxbdasheng\DesignPatterns\TemplateMethod;

/**
 * 闪迪
 */
class SanDisk extends Memory
{
    public function brand(): string
    {
        return '闪迪(SanDisk)';
    }

    public function size(): string
    {
        return '8 Gb';
    }
}