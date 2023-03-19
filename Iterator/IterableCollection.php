<?php

namespace cxbdasheng\DesignPatterns\Iterator;

/**
 * 容器接口
 */
interface IterableCollection
{
    /**
     * 创建迭代器
     * @return mixed
     * @author chendashengpc
     */
    public function createIterator();
}