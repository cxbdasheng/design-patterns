<?php

namespace cxbdasheng\DesignPatterns\Proxy;
require __DIR__ . '/../vendor/autoload.php';

$db = new Proxy();

// 获取数据
echo $db->get() . PHP_EOL;
// 设置数据
echo $db->set() . PHP_EOL;
//删除数据
echo $db->delete() . PHP_EOL;