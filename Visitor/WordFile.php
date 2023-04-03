<?php

namespace cxbdasheng\DesignPatterns\Visitor;

class WordFile implements FileInterface
{
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->WordToTxt($this);
    }

    /**
     * 打开 Word 文件内容
     * @return string
     * @author chendashengpc
     */
    public function openWord(): string
    {
        return '我是 Word 文件内容';
    }
}