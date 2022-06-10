<?php

namespace cxbdasheng\DesignPatterns\Builder;
require __DIR__ . '/../vendor/autoload.php';

$builder = new AsusComputerBuilder();
$director = new Director($builder);
var_dump($builder->getResult());