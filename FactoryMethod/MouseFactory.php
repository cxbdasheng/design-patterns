<?php

namespace cxbdasheng\DesignPatterns\FactoryMethod;

class MouseFactory implements Factory
{
    public function production(): Product
    {
        return new MouseProduct();
    }
}