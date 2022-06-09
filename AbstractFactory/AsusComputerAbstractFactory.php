<?php

namespace cxbdasheng\DesignPatterns\AbstractFactory;

class AsusComputerAbstractFactory implements AbstractFactory
{
    public function createKeyboard(): Mouse
    {
        return new AsusKeyboard();
    }

    public function createMouse(): Mouse
    {
        return new AsusMouse();
    }
}