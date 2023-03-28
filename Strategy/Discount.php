<?php

namespace cxbdasheng\DesignPatterns\Strategy;

/**
 * 折扣类
 */
class Discount implements Strategy
{
    public function execute()
    {
        // todo 业务代码
        return '我是折扣策略';
    }
}