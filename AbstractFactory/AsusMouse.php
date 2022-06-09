<?php

namespace cxbdasheng\DesignPatterns\AbstractFactory;

class AsusMouse implements Mouse
{
    public function getPrice(): float
    {
        return 49.9;
    }
}