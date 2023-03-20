<?php

namespace cxbdasheng\DesignPatterns\Command;

/**
 * 创建
 */
class Create extends Command
{
    /**
     * 初始化函数
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->name = 'create';
        $this->model = $model;
    }

    /**
     * 执行函数
     * @return mixed|void
     * @author chendashengpc
     */
    public function execute()
    {
        return $this->model->create();
    }
}