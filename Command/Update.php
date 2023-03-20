<?php

namespace cxbdasheng\DesignPatterns\Command;

/**
 * 更新
 */
class Update extends Command
{
    /**
     * 初始化函数
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->name = 'update';
        $this->model = $model;
    }

    /**
     * 执行函数
     * @return mixed|void
     * @author chendashengpc
     */
    public function execute()
    {
        return $this->model->update();
    }
}