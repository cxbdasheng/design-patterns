<?php

namespace cxbdasheng\DesignPatterns\Bridge;

/**
 *
 * 异形机箱
 */
class AlienCase extends CaseAbstract
{
    public function run()
    {
        return $this->color->getInfo() . '异形机箱';
    }
}