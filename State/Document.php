<?php

namespace cxbdasheng\DesignPatterns\State;

class Document
{
    protected State $state;

    /**
     * 初始化默认状态
     */
    public function __construct()
    {
        $this->state = new Draft($this);
    }

    /**
     * 渲染
     * @return void
     * @author chendashengpc
     */
    public function render()
    {
        return $this->state->render();
    }

    /**
     * 发布
     * @return void
     * @author chendashengpc
     */
    public function publish()
    {
        return $this->state->publish();
    }

    /**
     * 修改状态
     * @param State $state
     * @return void
     * @author chendashengpc
     */
    public function changeState(State $state)
    {
        $this->state = $state;
    }
}