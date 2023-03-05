<?php

namespace cxbdasheng\DesignPatterns\Composite;

/**
 * 文件类
 */
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

    /**
     * 输出文件 [-] 为文件
     * @param $level
     * @return string
     * @author chendashengpc
     */
    public function display($level = '')
    {
        return $level . '[-]' . $this->name . PHP_EOL;
    }
}