<?php
/**
 * @author ChenDasheng
 * @created 2022/6/11 11:54
 */

namespace cxbdasheng\DesignPatterns\Prototype;

abstract class Prototype
{
    private array $parts = [];

    /**
     * 添加零件
     * @param string $type
     * @param float $price
     * @return void
     */
    public function add(string $type, float $price)
    {
        $this->parts[$type] = $price;
    }

    /**
     * 显示零件
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

    abstract public function __clone();
}