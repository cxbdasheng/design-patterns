<?php

namespace cxbdasheng\DesignPatterns\Iterator;
require __DIR__ . '/../vendor/autoload.php';

$collection = new ConcreteCollection();

$collection->add(1);
$collection->add(5);
$collection->add(6);
$collection->add(9);

$iterator = $collection->createIterator();
echo $iterator->getCurrent() . PHP_EOL;
while ($iterator->hasMore()) {
    echo $iterator->getNext() . PHP_EOL;
}