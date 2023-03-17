<?php

namespace cxbdasheng\DesignPatterns\Observer;

class Customer extends Subscriber
{
    public function update()
    {
        echo '我是' . $this->name, '，我马上来门店产看新产品' . PHP_EOL;
    }
}