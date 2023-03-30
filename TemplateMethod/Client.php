<?php

namespace cxbdasheng\DesignPatterns\TemplateMethod;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 金士顿
 */
$kingston = new Kingston();
$kingston->run();
echo PHP_EOL;

/**
 * 三星
 */
$samsung = new Samsung();
$samsung->run();
echo PHP_EOL;

/**
 * 闪迪
 */
$sandisk = new SanDisk();
$sandisk->run();
echo PHP_EOL;
