<?php

require '../../../vendor/autoload.php';

use Phamta\DesignPattern\Creational\AbstractFactory\WriterAbstractFactory;


$writerAbstractFactory = new WriterAbstractFactory();
$data = [1, 2, 3, 4];
$type = $argv[1];
switch ($type) {
    case "unix":
        $unixWriterFactory = $writerAbstractFactory->makeWriter('unix');
        echo $unixWriterFactory->createCsvWriter()->write($data) . "\n";
        echo $unixWriterFactory->createJsonWriter()->write($data, true). "\n";
        break;
    case "win":
        $winWriterFactory = $writerAbstractFactory->makeWriter('win');
        echo $winWriterFactory->createCsvWriter()->write($data). "\n";
        echo $winWriterFactory->createJsonWriter()->write($data, true);
        break;
    default:
        var_dump("khong co giao dien loai {$type}");
}

