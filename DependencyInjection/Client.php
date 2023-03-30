<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;
require __DIR__ . '/../vendor/autoload.php';

/**
 * 使用资源的客户端
 */
class Client
{
    public Resources $resources;

    public function __construct(Resources $resources)
    {
        $this->resources = $resources;
    }

    public function useResources()
    {
        echo $this->resources->use() . PHP_EOL;
    }
}

$ioc = new Ioc();
/**
 * 将资源类注入到 Client 类中
 */
$client = new Client($ioc->getInstance('b'));
$client->useResources();
$client = new Client($ioc->getInstance('c'));
$client->useResources();

$ioc = new ReflectorIoc();
/**
 * 将资源类注入到 Client 类中
 */
$client = new Client($ioc->getInstance('a'));
$client->useResources();

$client = new Client($ioc->getInstance('C'));
$client->useResources();