<?php


namespace cxbdasheng\DesignPatterns\Proxy;

/**
 * 代理
 * Class Proxy
 * @package cxbdasheng\DesignPatterns\Proxy
 */
class Proxy implements DbInterface
{
    private $db = null;

    /**
     * 构造函数
     * Proxy constructor.
     */
    public function __construct()
    {
        if ($this->db == null) {
            $this->db = new Db();
        }
        return $this->db;
    }

    public function get()
    {
        // todo 做我代理想做的事
        return $this->db->get();
    }

    public function set()
    {
        return $this->db->set();
    }

    public function delete()
    {
        return $this->db->delete();
    }

}