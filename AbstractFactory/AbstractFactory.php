<?php

namespace cxbdasheng\DesignPatterns\AbstractFactory;

interface AbstractFactory
{
    public function createKeyboard();

    public function createMouse();
}