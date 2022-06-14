<?php

namespace cxbdasheng\DesignPatterns\Singleton;

class Singleton
{
    /**
     * 静态成品变量 保存全局实例
     */
    private static $instance = NULL;

    /**
     * 私有化默认构造方法，保证外界无法直接实例化
     */
    private function __construct()
    {

    }

    /**
     * 私有化防止用户克隆实例
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * 私有化防止反序列化
     */
    private function __wakeup()
    {

    }

    /**
     * 静态工厂方法，返还此类的唯一实例
     * @return object
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return new Singleton();
        }
        return self::$instance;
    }


    /**
     * 测试用方法
     */
    public function test()
    {
        echo 'Singleton Test!' . PHP_EOL;
    }
}