<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;
/**
 * A 资源
 */
class A implements Resources
{
    /**
     * 使用 A 资源
     * @return string
     * @author chendashengpc
     */
    public function use(): string
    {
        return '现在使用的是 A 资源';
    }
}