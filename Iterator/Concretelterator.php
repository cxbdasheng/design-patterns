<?php

namespace cxbdasheng\DesignPatterns\Iterator;

/**
 * 具体迭代器(倒序迭代器)
 */
class Concretelterator implements Iterator
{
    public $collection;
    /**
     * 索引数
     * @var
     */
    private int $index;

    public function __construct(array $collection)
    {
        $this->collection = $collection;
        $this->index = count($this->collection) - 1;
    }

    public function getCurrent()
    {
        if (isset($this->collection[$this->index])) {
            return $this->collection[$this->index];
        }
        return '当前没有元素';
    }

    public function getNext()
    {
        --$this->index;
        if ($this->hasMore()) {
            return $this->collection[$this->index];
        }
        return '没有元素了';
    }

    public function hasMore(): bool
    {
        if (isset($this->collection[$this->index])) {
            return true;
        }
        return false;
    }
}