<?php

namespace cxbdasheng\DesignPatterns\Command;

class Model
{

    /**
     * 删除
     * @return void
     * @author chendashengpc
     */
    public function delete()
    {
        return '删除命令';
    }

    /**
     * 更新
     * @return void
     * @author chendashengpc
     */
    public function update()
    {
        return '更新命令';
    }

    /**
     * 新增
     * @return string
     * @author chendashengpc
     */
    public function create()
    {
        return '新增命令';
    }
}