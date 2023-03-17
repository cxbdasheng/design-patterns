<?php


namespace cxbdasheng\DesignPatterns\Proxy;

/**
 * 数据库接口
 * Interface DbInterface
 * @package cxbdasheng\DesignPatterns\Proxy
 */
interface DbInterface
{
    /**
     * 获取数据
     * @return mixed
     */
    public function get();

    /**
     * 设置数据
     * @return mixed
     */
    public function set();

    /**
     * 删除数据
     * @return mixed
     */
    public function delete();

}