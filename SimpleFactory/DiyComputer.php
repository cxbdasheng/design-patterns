<?php

namespace cxbdasheng\DesignPatterns\SimpleFactory;
require __DIR__ . '/../vendor/autoload.php';

// 生成鼠标
$mouse = Factory::production('mouse');
$mousePrice = $mouse->getPrice();
// 生成键盘
$keyboard = Factory::production('keyboard');
$keyboardPrice = $keyboard->getPrice();
// 生成显示器
$display = Factory::production('display');
$displayPrice = $display->getPrice();

echo $mousePrice + $keyboardPrice + $displayPrice;