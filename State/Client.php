<?php

namespace cxbdasheng\DesignPatterns\State;
require __DIR__ . '/../vendor/autoload.php';


$document = new Document();
// 处于草稿阶段
echo $document->render() . PHP_EOL;
// 发布为审核状态
$document->publish();
echo $document->render() . PHP_EOL;
// 发布
$document->publish();
echo $document->render() . PHP_EOL;
