<?php

namespace cxbdasheng\DesignPatterns\DependencyInjection;

use ReflectionClass;

/**
 * IoC 容器（反射实现）
 */
class ReflectorIoc
{
    /**
     * 获取指定资源
     * @param $resources 资源名
     * @return Resources
     * @author chendashengpc
     */
    public function getInstance($resources): Resources
    {
        // 转化成大写类名
        $class = strtoupper($resources);
        // 反射 双引号防止转义
        try {
            $reflector = new ReflectionClass(__NAMESPACE__ . '\\' . $class);
            // 调用反射类 newInstance 直接实例化了，资源类构造函数有传参需获取参数再进行实例化。
            $obj = $reflector->newInstance();
        } catch (\Exception $exception) {
            throw new \InvalidArgumentException('没有此类');
        }
        return $obj;
    }
}