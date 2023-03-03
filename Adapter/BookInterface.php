<?php

namespace cxbdasheng\DesignPatterns\Adapter;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;

    public function getInfo(): string;
}