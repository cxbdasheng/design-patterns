<?php

namespace cxbdasheng\DesignPatterns\Visitor;
/**
 * 文件转 txt
 */
class FileToTxt implements VisitorInterface
{
    /**
     * pdf 转 txt
     * @param FileInterface $file
     * @return mixed
     * @author chendashengpc
     */
    public function PdfToTxt(FileInterface $file)
    {
        return $file->openPdf();
    }

    /**
     * Word 转 txt
     * @param FileInterface $file
     * @return mixed
     * @author chendashengpc
     */
    public function WordToTxt(FileInterface $file)
    {
        return $file->openWord();
    }

    /**
     * Xml 转 txt
     * @param FileInterface $file
     * @return mixed
     * @author chendashengpc
     */
    public function XmlToTxt(FileInterface $file)
    {
        return $file->openXml();
    }
}