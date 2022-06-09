<?php

namespace cxbdasheng\DesignPatterns\FactoryMethod;
require __DIR__ . '/../vendor/autoload.php';

$keyboardFactory = new KeyboardFactory();
$keyboard = $keyboardFactory->production();
$keyboardPrice = $keyboard->getPrice();

$mouseFactory = new MouseFactory();
$mouse = $mouseFactory->production();
$mousePrice = $mouse->getPrice();

echo $mousePrice + $keyboardPrice;