<?php

namespace cxbdasheng\DesignPatterns\Facade;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 实例化班长类
 */
$facade = new MonitorFacade();
/**
 * 参加乒乓球赛的人员
 */
echo '参加乒乓球赛的人员：' . $facade->ableTennis() . PHP_EOL;

/**
 * 参加羽毛球赛人员
 */

echo '参加羽毛球赛人员：' . $facade->badminton() . PHP_EOL;