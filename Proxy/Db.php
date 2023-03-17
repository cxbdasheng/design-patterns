<?php


namespace cxbdasheng\DesignPatterns\Proxy;

/**
 * 真实数据库类
 * Class Db
 * @package cxbdasheng\DesignPatterns\Proxy
 */
class Db implements DbInterface
{
    public function get()
    {
        return '真实数据库获取数据方法';
    }

    public function set()
    {
        return '真实数据库设置数据方法';
    }

    public function delete()
    {
        return '真实数据库删除数据方法';
    }

}