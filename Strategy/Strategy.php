<?php

namespace cxbdasheng\DesignPatterns\Strategy;

/**
 * 商场策略接口类
 */
interface Strategy
{
    /**
     * 执行策略具体逻辑，如：满减、折扣、返利
     * @return mixed
     * @author chendashengpc
     */
    public function execute();
}