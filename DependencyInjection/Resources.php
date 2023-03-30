<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;

/**
 * 资源基类接口
 */
interface Resources
{
    /**
     * 使用资源
     * @return mixed
     * @author chendashengpc
     */
    public function use(): string;
}