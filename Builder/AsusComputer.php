<?php

namespace cxbdasheng\DesignPatterns\Builder;

class AsusComputer
{
    private array $parts = [];

    /**
     * 添加部件
     * @param string $type
     * @param float $price
     * @return void
     */
    public function add(string $type, float $price)
    {
        $this->parts[$type] = $price;
    }

    /**
     * 显示部件价格
     * @param string $type
     * @return mixed
     */
    public function show(string $type)
    {
        if (!isset($this->parts[$type])) {
            throw new \InvalidArgumentException('没有此部件');
        }
        return $this->parts[$type];
    }
}