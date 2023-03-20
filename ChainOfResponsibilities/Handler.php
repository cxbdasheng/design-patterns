<?php

namespace cxbdasheng\DesignPatterns\ChainOfResponsibilities;

interface Handler
{
    /**
     * 下一个请求
     * @return mixed
     * @author chendashengpc
     */
    public function setNext(Handler $handler);

    /**
     * 当前处理
     * @return mixed
     * @author chendashengpc
     */
    public function handler();
}