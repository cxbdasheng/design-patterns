<?php

namespace cxbdasheng\DesignPatterns\Composite;
require __DIR__ . '/../vendor/autoload.php';

$designPatterns = new Dir('design patterns');
$readme = new File('README.md');

$designPatterns->add($readme);

/**
 * Composite 文件夹
 */
$composite = new Dir('Composite');
$node = new File('Node.php');
$file = new File('File.php');
$dir = new File('Dir.php');

$composite->add($node);
$composite->add($file);
$composite->add($dir);

$designPatterns->add($composite);
$composite->remove($dir);

/**
 * Singleton 文件夹
 */
$singleton = new Dir('Singleton');
$singletonFile = new File('Singleton.php');
$singleton->add($singletonFile);
$designPatterns->add($singleton);

echo $designPatterns->display();