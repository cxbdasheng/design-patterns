<?php

namespace cxbdasheng\DesignPatterns\Bridge;

/**
 *
 * 普通机箱
 */
class DefaultCase extends CaseAbstract
{
    public function run()
    {
        return $this->color->getInfo() . '普通机箱';
    }
}