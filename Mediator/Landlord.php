<?php

namespace cxbdasheng\DesignPatterns\Mediator;

/**
 * 房东
 */
class Landlord extends Customer
{
    /**
     *
     * @return mixed|void
     * @author chendashengpc
     */
    public function getMessage(string $message)
    {
        return $this->name . '(房东) 获得对方消息：' . $message;
    }
}