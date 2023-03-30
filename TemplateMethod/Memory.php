<?php

namespace cxbdasheng\DesignPatterns\TemplateMethod;

/**
 * 内存抽象类
 */
abstract class Memory
{
    /**
     * 品牌
     * @return string
     * @author chendashe\ngpc
     */
    abstract public function brand(): string;

    /**
     * 内存大小
     * @return string
     * @author chendashengpc
     */
    abstract public function size(): string;

    /**
     * 运行参数
     * @return void
     * @author chendashengpc
     */
    public function config()
    {
        echo '内存品牌：' . $this->brand() . PHP_EOL;
        echo '内存大小：' . $this->size() . PHP_EOL;
        echo '内存颗粒：' . $this->particles() . PHP_EOL;
    }

    /**
     * 运行方法，运行是通用的。
     * @return void
     * @author chendashengpc
     */
    public function run()
    {
        echo '开始运行 ' . $this->brand() . ' 内存条' . PHP_EOL;
        $this->config();
        // do something
    }

    /**
     * 内存颗粒
     * @return void
     * @author chendashengpc
     */
    public function particles(): string
    {
        return 'TLC';
    }
}
