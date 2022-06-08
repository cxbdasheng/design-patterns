<?php

namespace cxbdasheng\DesignPatterns\SimpleFactory;

class Display implements Product
{
    public function getPrice(): float
    {
        return 1499.99;
    }
}