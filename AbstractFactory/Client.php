<?php

namespace cxbdasheng\DesignPatterns\AbstractFactory;
require __DIR__ . '/../vendor/autoload.php';

// 华硕工厂类
$asusComputer = new AsusComputerAbstractFactory();

// 鼠标
$mouse = $asusComputer->createMouse();
$mousePrice = $mouse->getPrice();

// 键盘
$keyboard = $asusComputer->createKeyboard();
$keyboardPrice = $keyboard->getPrice();

echo $mousePrice + $keyboardPrice;