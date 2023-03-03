<?php

namespace cxbdasheng\DesignPatterns\Bridge;

class White implements ColorInterface
{
    public function getInfo()
    {
        return '白色';
    }
}