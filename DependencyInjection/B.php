<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;

/**
 * B 资源
 */
class B implements Resources
{
    /**
     * 使用 B 资源
     * @return string
     * @author chendashengpc
     */
    public function use(): string
    {
        return '现在使用的是 B 资源';
    }
}