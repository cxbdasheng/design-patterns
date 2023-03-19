<?php

namespace cxbdasheng\DesignPatterns\State;

/**
 * 草稿
 */
class Draft extends State
{
    public function render()
    {
        return '草稿状态';
    }

    /**
     * 发布为审核中
     * @return mixed|void
     * @author chendashengpc
     */
    public function publish()
    {
        $this->document->changeState(new Moderation($this->document));
    }
}