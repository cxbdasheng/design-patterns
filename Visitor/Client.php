<?php

namespace cxbdasheng\DesignPatterns\Visitor;
require __DIR__ . '/../vendor/autoload.php';

$fileToTxt = new FileToTxt();

$pdf = new PdfFile();
echo $pdf->accept($fileToTxt) . PHP_EOL;

$word = new WordFile();
echo $word->accept($fileToTxt) . PHP_EOL;

$xml = new XmlFile();
echo $xml->accept($fileToTxt) . PHP_EOL;
