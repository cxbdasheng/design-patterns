<?php

namespace cxbdasheng\DesignPatterns\Visitor;

class XmlFile implements FileInterface
{
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->XmlToTxt($this);
    }

    /**
     * 打开 Xml 文件内容
     * @return string
     * @author chendashengpc
     */
    public function openXml(): string
    {
        return '我是 Xml 文件内容';
    }
}