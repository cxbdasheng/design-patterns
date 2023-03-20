<?php

namespace cxbdasheng\DesignPatterns\ChainOfResponsibilities;

abstract class BaseHandler implements Handler
{
    /**
     * 下一个请求类
     * @var Handler
     */
    protected Handler $next;
}