<?php

namespace cxbdasheng\DesignPatterns\Bridge;

require __DIR__ . '/../vendor/autoload.php';

$black = new Black();
$white = new  White();
$transparent = new  Transparent();

$blackAlienCase = new AlienCase($black);
echo $blackAlienCase->run() . PHP_EOL;

$whiteAlienCase = new AlienCase($white);
echo $whiteAlienCase->run() . PHP_EOL;

$transparentAlienCase = new AlienCase($transparent);
echo $transparentAlienCase->run() . PHP_EOL;

echo PHP_EOL;

$blackSeascapeCase = new SeascapeCase($black);
echo $blackSeascapeCase->run() . PHP_EOL;

$whiteSeascapeCase = new SeascapeCase($white);
echo $whiteSeascapeCase->run() . PHP_EOL;

$transparentSeascapeCase = new SeascapeCase($transparent);
echo $transparentSeascapeCase->run() . PHP_EOL;

echo PHP_EOL;

$blackDefaultCase = new DefaultCase($black);
echo $blackDefaultCase->run() . PHP_EOL;

$whiteDefaultCase = new DefaultCase($white);
echo $whiteDefaultCase->run() . PHP_EOL;

$transparentDefaultCase = new DefaultCase($transparent);
echo $transparentDefaultCase->run() . PHP_EOL;