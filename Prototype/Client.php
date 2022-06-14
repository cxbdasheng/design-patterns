<?php

namespace cxbdasheng\DesignPatterns\Prototype;
require __DIR__ . '/../vendor/autoload.php';

$computer = new ComputerPrototype(new Display());
$computer->add('mouse', 49.9);
$computer->add('keyboard', 149.9);
var_dump($computer);


$cloneComputer = clone $computer;
$cloneComputer->add('keyboard', 199.9);
$cloneComputer->setDisplayPrice(2999.9);
var_dump($cloneComputer);
var_dump($computer);