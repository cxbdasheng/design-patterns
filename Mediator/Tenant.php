<?php

namespace cxbdasheng\DesignPatterns\Mediator;

/**
 * 租客
 */
class Tenant extends Customer
{
    /**
     *
     * @return mixed|void
     * @author chendashengpc
     */
    public function getMessage(string $message)
    {
        return $this->name . '(租客) 获得对方消息：' . $message;
    }
}