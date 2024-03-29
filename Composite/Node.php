<?php

namespace cxbdasheng\DesignPatterns\Composite;

abstract class Node
{
    protected $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 增加节点
     * @return mixed
     * @author chendashengpc
     */
    abstract public function add(Node $node);

    /**
     * 删除节点
     * @return mixed
     * @author chendashengpc
     */
    abstract public function remove(Node $node);

    /**
     * 显示当前树
     * @param $level 树等级
     * @return mixed
     * @author chendashengpc
     */
    abstract public function display($level);
}