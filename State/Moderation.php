<?php

namespace cxbdasheng\DesignPatterns\State;

/**
 * 审查中
 */
class Moderation extends State
{
    public function render()
    {
        return '审查状态';
    }

    /**
     * 发布为审核中
     * @return mixed|void
     * @author chendashengpc
     */
    public function publish()
    {
        $this->document->changeState(new Published($this->document));
    }
}