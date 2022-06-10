<?php

namespace cxbdasheng\DesignPatterns\Builder;

class AsusComputerBuilder implements Builder
{
    public AsusComputer $asusComputer;

    public function __construct()
    {
        $this->asusComputer = new AsusComputer();
    }

    // 设置鼠标以及价格
    public function setMouse()
    {
        $this->asusComputer->add('mouse', 49.9);
    }

    // 设置键盘以及价格
    public function setKeyboard()
    {
        $this->asusComputer->add('keyboard', 149.9);
    }

    // 设置显示器以及价格
    public function setDisplay()
    {
        $this->asusComputer->add('display', 1490.9);
    }

    // 返回具体产品
    public function getResult(): AsusComputer
    {
        return $this->asusComputer;
    }
}