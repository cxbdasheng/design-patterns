<?php

namespace cxbdasheng\DesignPatterns\State;

/**
 * 已发表
 */
class Published extends State
{
    public function render()
    {
        return '已发表状态';
    }

    /**
     * 发布成功了，再次可变为草稿
     * @return mixed|void
     * @author chendashengpc
     */
    public function publish()
    {
        $this->document->changeState(new Draft($this->document));
    }
}