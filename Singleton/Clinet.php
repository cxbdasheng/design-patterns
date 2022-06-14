<?php

namespace cxbdasheng\DesignPatterns\Singleton;
require __DIR__ . '/../vendor/autoload.php';

$instance = Singleton::getInstance();
$instance->test();
var_dump($instance);

$newInstance = Singleton::getInstance();
$newInstance->test();
var_dump($newInstance);