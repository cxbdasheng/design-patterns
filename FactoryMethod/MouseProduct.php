<?php

namespace cxbdasheng\DesignPatterns\FactoryMethod;

class MouseProduct implements Product
{
    public function getPrice(): float
    {
        return 49.99;
    }
}