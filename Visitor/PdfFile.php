<?php

namespace cxbdasheng\DesignPatterns\Visitor;

class PdfFile implements FileInterface
{
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->PdfToTxt($this);
    }

    /**
     * 打开 PDF 文件内容
     * @return string
     * @author chendashengpc
     */
    public function openPdf(): string
    {
        return '我是 Pdf 文件内容';
    }
}