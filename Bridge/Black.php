<?php

namespace cxbdasheng\DesignPatterns\Bridge;

class Black implements ColorInterface
{
    public function getInfo()
    {
        return '红色';
    }
}