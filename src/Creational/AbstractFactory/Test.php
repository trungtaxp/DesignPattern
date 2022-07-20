<?php

require '../../../vendor/autoload.php';
use Phamta\DesignPattern\Creational\AbstractFactory\UnixWriterFactory;
use Phamta\DesignPattern\Creational\AbstractFactory\WinWriterFactory;

$data = [1, 2, 3, 4];
$type = $argv[1];
switch ($type) {
    case "unix":
        $unixWriterFactory = new UnixWriterFactory();
        echo $unixWriterFactory->createCsvWriter()->write($data) . "\n";
        echo $unixWriterFactory->createJsonWriter()->write($data, true). "\n";
        break;
    case "win":
        $winWriterFactory = new WinWriterFactory();
        echo $winWriterFactory->createCsvWriter()->write($data). "\n";
        echo $winWriterFactory->createJsonWriter()->write($data, true);
        break;
    default:
        var_dump("khong co giao dien loai {$type}");
}

