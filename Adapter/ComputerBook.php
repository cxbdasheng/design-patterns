<?php

namespace cxbdasheng\DesignPatterns\Adapter;

/**
 * 计算机专业相关的书
 */
class ComputerBook implements BookInterface
{

    /**
     * @var int 当前页数
     */
    private $page = 0;

    public function turnPage()
    {
        return ++$this->page;
    }

    public function open()
    {
        $this->page = 0;
        return $this->page;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getInfo(): string
    {
        return '计算机专业书'.PHP_EOL;
    }
}