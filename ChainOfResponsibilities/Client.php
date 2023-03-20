<?php

namespace cxbdasheng\DesignPatterns\ChainOfResponsibilities;
require __DIR__ . '/../vendor/autoload.php';

$county = new CountyEducationBureau();
$municipal = new MunicipalEducationBureau();
$provincial = new ProvincialEducationBureau();

/**
 * 设置下一级别处理者
 */
$county->setNext($municipal);
$municipal->setNext($provincial);

$county->handler();