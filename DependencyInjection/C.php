<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;

/**
 * C 资源
 */
class C implements Resources
{
    /**
     * 使用 C 资源
     * @return string
     * @author chendashengpc
     */
    public function use():string
    {
        return '现在使用的是 C 资源';
    }
}