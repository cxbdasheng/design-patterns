<?php

namespace cxbdasheng\DesignPatterns\Memento;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 初始化
 */
$origin = new Origin();
echo $origin . PHP_EOL;
/**
 * 提升力量
 */
$origin->setHp(200);
$origin->setLp(200);;
$origin->setPower(100);
echo $origin . PHP_EOL;

/**
 * 存进版本库
 */
$history = new History();
/**
 * 设置快照
 */
$history->makeBackup($origin->makeSnapshot());

$origin->setHp(120);
$origin->setLp(120);;
$origin->setPower(60);
echo $origin . PHP_EOL;
/**
 * 回滚
 */
$snapshot = $history->undo();
$origin->restore($snapshot);
echo $origin . PHP_EOL;
