<?php

namespace cxbdasheng\DesignPatterns\Visitor;

interface FileInterface
{
    /**
     * 接受者（接受访问者）
     * @return mixed
     * @author chendashengpc
     */
    public function accept(VisitorInterface $visitor);
}