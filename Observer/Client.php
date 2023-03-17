<?php

namespace cxbdasheng\DesignPatterns\Observer;
require __DIR__ . '/../vendor/autoload.php';

$shop = new Shop();
$zs = new Customer('张三');
$ls = new Customer('李四');
$ww = new Customer('王五');

$shop->attach($zs);
$shop->attach($ls);
$shop->attach($ww);

$shop->notify();
echo PHP_EOL;
echo '产品不好，李四想退出订阅' . PHP_EOL;
$shop->detach($ls);
$shop->notify();