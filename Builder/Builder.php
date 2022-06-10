<?php

namespace cxbdasheng\DesignPatterns\Builder;

interface Builder
{
    // 设置鼠标
    public function setMouse();

    // 设置键盘
    public function setKeyboard();

    // 设置显示器
    public function setDisplay();

    // 获取电脑
    public function getResult();
}