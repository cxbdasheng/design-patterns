<?php

namespace cxbdasheng\DesignPatterns\Bridge;

/**
 *
 * 海景房机箱
 */
class SeascapeCase extends CaseAbstract
{
    public function run()
    {
        return $this->color->getInfo() . '海景房机箱';
    }
}