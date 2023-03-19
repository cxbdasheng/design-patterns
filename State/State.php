<?php

namespace cxbdasheng\DesignPatterns\State;

abstract class State
{
    /**
     * 当前类
     * @var Document
     */
    public Document $document;

    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * 渲染
     * @return mixed
     * @author chendashengpc
     */
    abstract public function render();

    /**
     * 发布
     * @return mixed
     * @author chendashengpc
     */
    abstract public function publish();
}