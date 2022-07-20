<?php

require '../../../vendor/autoload.php';
use Phamta\DesignPattern\Creational\AbstractFactory\UnixWriterFactory;
use Phamta\DesignPattern\Creational\AbstractFactory\WinWriterFactory;

$data = [1, 2, 3, 4];
$unixWriterFactory = new UnixWriterFactory();
$winWriterFactory = new WinWriterFactory();
echo $unixWriterFactory->createCsvWriter()->write($data) . "\n";
echo $unixWriterFactory->createJsonWriter()->write($data, true). "\n";
echo $winWriterFactory->createCsvWriter()->write($data). "\n";
echo $winWriterFactory->createJsonWriter()->write($data, true);