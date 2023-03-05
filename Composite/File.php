<?php

namespace cxbdasheng\DesignPatterns\Composite;

class File extends Node
{
    public function add(Node $node)
    {
        throw new \Exception('文件不能添加子节点');
    }

    public function remove(Node $node)
    {
        throw new \Exception('文件不能添加子节点');
    }

    public function display()
    {
        return '--' . $this->name . PHP_EOL;
    }
}