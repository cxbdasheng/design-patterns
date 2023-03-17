<?php

namespace cxbdasheng\DesignPatterns\Flyweight;
require __DIR__ . '/../vendor/autoload.php';
/**
 * 弹类工厂
 */
$factory = new BulletFactory();

// 弹片 A
$shrapnelA = $factory->getBullet('black', 'black.jpg', Shrapnel::class);
echo $shrapnelA->run(1) . PHP_EOL;

// 弹片 B
$shrapnelB = $factory->getBullet('black', 'black.jpg', Shrapnel::class);
echo $shrapnelB->run(2) . PHP_EOL;

// 导弹...
$missile=new Missile('red', 'missile.jpg');
echo $missile->run(1);
