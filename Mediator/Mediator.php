<?php

namespace cxbdasheng\DesignPatterns\Mediator;

/**
 * 中介公司
 */
class Mediator implements MediatorInterface
{
    /**
     * 房东
     * @var Customer
     */
    public Customer $landlord;
    /**
     * 租客
     * @var Customer
     */
    public Customer $tenant;

    public function send(string $message, Customer $customer)
    {
        if ($this->landlord == $customer) {
            return $this->tenant->getMessage($message);
        }
        return $this->landlord->getMessage($message);
    }
}