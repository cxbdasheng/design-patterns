<?php

namespace cxbdasheng\DesignPatterns\FactoryMethod;

class KeyboardProduct implements Product
{
    public function getPrice(): float
    {
        return 149.99;
    }
}