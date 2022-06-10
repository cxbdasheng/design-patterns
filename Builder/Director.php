<?php

namespace cxbdasheng\DesignPatterns\Builder;

class Director
{

    public function __construct(Builder $builder)
    {
        $builder->setMouse();
        $builder->setKeyboard();
        $builder->setDisplay();
    }

}