<?php

namespace cxbdasheng\DesignPatterns\Composite;

class Dir extends Node
{
    protected $children = [];

    public function add(Node $node)
    {
        if (isset($this->children[$node->name])) {
            throw new \Exception('请勿重复创建');
        }
        $this->children[$node->name] = $node;
    }

    public function remove(Node $node)
    {
        if (!isset($this->children[$node->name])) {
            throw new \Exception('请创建后再移除');
        }
        unset($this->children[$node->name]);
    }

    public function display()
    {
        $nameStr = $this->name .PHP_EOL;
        foreach ($this->children as $k => $v) {

            $nameStr .= '--' . $v->display();
        }
        return $nameStr;
    }
}