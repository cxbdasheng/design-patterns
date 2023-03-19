<?php

namespace cxbdasheng\DesignPatterns\Iterator;

/**
 * 具体容器类
 */
class ConcreteCollection implements IterableCollection
{
    public $collection;

    public function add($value)
    {
        $this->collection[] = $value;
    }

    public function createIterator()
    {
        return new Concretelterator($this->collection);
    }
}