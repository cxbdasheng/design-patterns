<?php

namespace cxbdasheng\DesignPatterns\Bridge;

/**
 * 红色
 */
class Black implements ColorInterface
{
    public function getInfo()
    {
        return '黑色';
    }
}