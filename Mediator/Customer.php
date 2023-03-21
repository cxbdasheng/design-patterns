<?php

namespace cxbdasheng\DesignPatterns\Mediator;

/**
 * 顾客抽象类
 */
abstract class Customer
{
    /**
     * 中介
     * @var MediatorInterface
     */
    protected MediatorInterface $mediator;

    /**
     * 顾客姓名
     * @var string
     */
    public string $name;

    public function __construct(string $name, MediatorInterface $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    /**
     * 获取对方信息
     * @param string $message
     * @return mixed
     * @author chendashengpc
     */
    abstract public function getMessage(string $message);

    /**
     * 和中介说
     * @param string $message
     * @return void
     * @author chendashengpc
     */
    public function declare(string $message)
    {
        return $this->mediator->send($message, $this);
    }
}