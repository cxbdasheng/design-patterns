<?php

namespace cxbdasheng\DesignPatterns\Mediator;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 初始化中介
 */
$intermediary = new Mediator();

$li = new Landlord('李先生', $intermediary);

$chen = new Tenant('陈大剩', $intermediary);

$intermediary->landlord = $li;
$intermediary->tenant = $chen;

echo $chen->declare('需要找一个带独卫的单间！') . PHP_EOL;

echo $li->declare('这刚好有一间带独立卫浴的房间') . PHP_EOL;
