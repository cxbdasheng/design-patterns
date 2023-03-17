<?php

namespace cxbdasheng\DesignPatterns\Observer;
/**
 * 门店
 */
class Shop
{
    /**
     * 订阅者
     * @var array
     */
    private $subscribers = [];

    /**
     * 添加订阅者
     * @return void
     * @author chendashengpc
     */
    public function attach(Subscriber $subscriber)
    {
        $this->subscribers[$subscriber->name] = $subscriber;
    }

    /**
     * 删除订阅者
     * @return void
     * @author chendashengpc
     */
    public function detach(Subscriber $subscriber)
    {
        if (isset($this->subscribers[$subscriber->name])) {
            unset($this->subscribers[$subscriber->name]);
        }
    }

    /**
     * 提醒
     * @return void
     * @author chendashengpc
     */
    public function notify()
    {
        if (count($this->subscribers) == 0) {
            return;
        }
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update();
        }
    }
}