<?php

namespace cxbdasheng\DesignPatterns\Composite;
/**
 * 文件夹
 */
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

    /**
     * 输出目录 [d] 为目录
     * @param $level
     * @return string
     * @author chendashengpc
     */
    public function display($level = '')
    {
        $nameStr = $level . '[d]' . $this->name . PHP_EOL;
        foreach ($this->children as $k => $v) {
            $nameStr .= $v->display($level . '--');
        }
        return $nameStr;
    }
}