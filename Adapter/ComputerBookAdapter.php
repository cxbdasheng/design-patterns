<?php

namespace cxbdasheng\DesignPatterns\Adapter;
/**
 *
 * 适配器（电脑）
 */
class ComputerBookAdapter implements BookInterface
{
    private $eBook = null;

    public function __construct()
    {
        $eBook = new TianlongEBook();
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
        return $this->eBook->turnTxtPage();
    }

    public function open()
    {
        return $this->eBook->openTxt();
    }

    public function getPage(): int
    {
        return $this->eBook->getTxtPage();
    }

    public function getInfo(): string
    {
        return $this->eBook->getTxtInfo();
    }
}