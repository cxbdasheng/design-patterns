<?php

namespace cxbdasheng\DesignPatterns\Mediator;

/**
 * 中介接口
 */
interface  MediatorInterface
{
    /**
     * 中间撮合消息
     * @param string $message
     * @param Customer $customer
     * @return mixed
     * @author chendashengpc
     */
    public function send(string $message, Customer $customer);
}