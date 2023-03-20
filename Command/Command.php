<?php

namespace cxbdasheng\DesignPatterns\Command;

/**
 * 命令模式接口基类
 */
abstract class Command
{
    /**
     * 模型
     * @var Model
     */
    public Model $model;

    /**
     * 命令名称
     * @var
     */
    public $name;

    /**
     * 执行方法
     * @return mixed
     * @author chendashengpc
     */
    abstract public function execute();

}