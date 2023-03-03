<?php

namespace cxbdasheng\DesignPatterns\Adapter;

/**
 *
 * 天龙八部电子书
 */
class TianlongEBook
{
    /**
     * @var int 当前页数
     */
    public $page = 0;

    public function turnTxtPage()
    {
        return ++$this->page;
    }

    public function openTxt()
    {
        $this->page = 0;
        return $this->page;
    }

    public function getTxtPage(): int
    {
        return $this->page;
    }

    public function getTxtInfo(): string
    {
        return '天龙八部' . PHP_EOL;
    }
}