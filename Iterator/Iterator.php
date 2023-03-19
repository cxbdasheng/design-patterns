<?php

namespace cxbdasheng\DesignPatterns\Iterator;

/**
 * 迭代器接口类
 */
interface Iterator
{
    /**
     * 获取当前
     * @return mixed
     * @author chendashengpc
     */
    public function getCurrent();

    /**
     * 获取下一个
     * @return mixed
     * @author chendashengpc
     */
    public function getNext();

    /**
     * 是否还有更多
     * @return bool
     * @author chendashengpc
     */
    public function hasMore(): bool;
}