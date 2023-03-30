<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;

/**
 * IoC 容器（switch 实现）
 */
class Ioc
{
    /**
     * 获取指定资源
     * @param $resources 资源名
     * @return Resources
     * @author chendashengpc
     */
    public function getInstance($resources): Resources
    {
        switch ($resources) {
            case 'a':
                return new A();
                break;
            case 'b':
                return new B();
                break;
            case 'c':
                return new C();
                break;
            default:
                throw new \InvalidArgumentException('没有此类');
        }
    }
}