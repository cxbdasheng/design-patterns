<?php

namespace cxbdasheng\DesignPatterns\Adapter;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 获取计算机专业书
 */
$computerBook=new ComputerBook();
echo $computerBook->getInfo();

/**
 * 获取英语专业书
 */
$englishBook=new EnglishBook();
echo $englishBook->getInfo();

/**
 * 电子书查看器
 */
$computerBookAdapter=new ComputerBookAdapter();
echo $computerBookAdapter->getInfo();