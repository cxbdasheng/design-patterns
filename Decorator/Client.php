<?php

namespace cxbdasheng\DesignPatterns\Decorator;
require __DIR__ . '/../vendor/autoload.php';


/**
 * 我点一杯 幽兰拿铁+ 奶油+ 开心果
 */
$latte = new Latte();
$cream = new Cream($latte);
$pistachio = new Pistachio($cream);

echo $pistachio->name();
echo '   ' . $pistachio->price() . '元' . PHP_EOL;

/**
 * 点一杯加三个奶油的声声乌龙（因为我比较喜欢喝奶油）
 */

$oolong = new Oolong();
$cream = new Cream($oolong);
$cream = new Cream($cream);
$cream = new Cream($cream);

echo $cream->name();
echo '   ' . $cream->price() . '元' . PHP_EOL;