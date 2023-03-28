<?php

namespace cxbdasheng\DesignPatterns\Strategy;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 折扣
 */
$payment = new Payment(new Discount());
echo $payment->payStrategy() . PHP_EOL;

/**
 * 积分返利
 */
$payment = new Payment(new PointRebate());
echo $payment->payStrategy() . PHP_EOL;

/**
 * 购物返券
 */
$payment = new Payment(new ShoppingVoucher());
echo $payment->payStrategy() . PHP_EOL;