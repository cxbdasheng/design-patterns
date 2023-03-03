<?php

namespace cxbdasheng\DesignPatterns\Bridge;

class Transparent implements ColorInterface
{
    public function getInfo()
    {
        return '透明';
    }
}