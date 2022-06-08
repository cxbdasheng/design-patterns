<?php

namespace cxbdasheng\DesignPatterns\SimpleFactory;

class Factory
{
    /**
     * 生产工厂
     * @param string $product
     * @return Product
     */
    static public function production(string $product): Product
    {
        switch ($product) {
            case 'mouse':
                $result = new Mouse();
                break;
            case 'keyboard':
                $result = new Keyboard();
                break;
            case 'display':
                $result = new Display();
                break;
            default:
                throw new \InvalidArgumentException('没有此运算');
        }
        return $result;
    }
}