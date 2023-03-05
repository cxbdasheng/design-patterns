<?php

namespace cxbdasheng\DesignPatterns\Bridge;

/**
 * 白色
 */
class White implements ColorInterface
{
    public function getInfo()
    {
        return '白色';
    }
}