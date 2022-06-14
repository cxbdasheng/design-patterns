<?php
/**
 * @author ChenDasheng
 * @created 2022/6/11 12:54
 */

namespace cxbdasheng\DesignPatterns\Prototype;

class ComputerPrototype extends Prototype
{
    private object $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    public function setDisplayPrice(float $price)
    {
        $this->display->price = $price;
    }

    public function __clone()
    {
        /**
         * 深拷贝序列化实现
         */
        //$serializeObj = serialize($this);  //  序列化
        //$cloneObj = unserialize($serializeObj);   //  反序列化
        //return $cloneObj;
        /**
         * 深拷贝克隆子类实现
         */
        //$this->display = clone $this->display;
        /**
         * 浅拷贝
         */
        return $this;
    }
}