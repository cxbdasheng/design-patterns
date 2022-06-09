<?php

namespace cxbdasheng\DesignPatterns\FactoryMethod;

class KeyboardFactory implements Factory
{
     public function production(): Product
    {
        return new KeyboardProduct();
    }
}