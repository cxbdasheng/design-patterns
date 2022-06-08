<?php
namespace cxbdasheng\DesignPatterns\SimpleFactory;

class Keyboard implements Product
{
    public function getPrice(): float
    {
        return 149.99;
    }
}