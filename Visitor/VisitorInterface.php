<?php

namespace cxbdasheng\DesignPatterns\Visitor;

interface VisitorInterface
{
    /**
     * pdf 转 txt
     * @param FileInterface $file
     * @return mixed
     * @author chendashengpc
     */
    public function PdfToTxt(FileInterface $file);

    /**
     * Word 转 txt
     * @param FileInterface $file
     * @return mixed
     * @author chendashengpc
     */
    public function WordToTxt(FileInterface $file);

    /**
     * Xml 转 txt
     * @param FileInterface $file
     * @return mixed
     * @author chendashengpc
     */
    public function XmlToTxt(FileInterface $file);
}