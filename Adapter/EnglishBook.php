<?php

namespace cxbdasheng\DesignPatterns\Adapter;

/**
 * 英语书
 */
class EnglishBook implements BookInterface
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
        return '英语书'.PHP_EOL;
    }
}