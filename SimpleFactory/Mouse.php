<?php
namespace cxbdasheng\DesignPatterns\SimpleFactory;

class Mouse implements Product
{
    public function getPrice(): float
    {
        return 499.99;
    }
}