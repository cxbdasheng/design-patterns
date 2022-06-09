<?php

namespace cxbdasheng\DesignPatterns\AbstractFactory;

class AsusKeyboard implements Keyboard
{
    public function getPrice(): float
    {
        return 149.9;
    }
}