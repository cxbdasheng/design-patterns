<?php

namespace cxbdasheng\DesignPatterns\Strategy;

/**
 * 支付类
 */
class Payment
{
    private Strategy $strategy;

    /**
     * 初始化函数
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 支付策略
     * @return mixed
     * @author chendashengpc
     */
    public function payStrategy()
    {
        return $this->strategy->execute();
    }
}