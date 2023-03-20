<?php

namespace cxbdasheng\DesignPatterns\Command;
require __DIR__ . '/../vendor/autoload.php';

// 新建一个模型
$model = new Model();
$create = new Create($model);
$update = new Update($model);
$delete = new Delete($model);

// 设置一个调用者
$invoker = new Invoker();
$invoker->setCommand($create);
$invoker->setCommand($update);
$invoker->setCommand($delete);
$invoker->revoke($delete);

$invoker->execute();
