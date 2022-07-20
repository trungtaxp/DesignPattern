<?php

require '../../../vendor/autoload.php';
use Phamta\DesignPattern\Creational\FactoryMethod\TransportFactory;
$factory = new TransportFactory();

$type = $argv[1];
switch ($type) {
    case "ship":
        $ship = $factory->makeTransport("ship");
        var_dump($ship);
        break;
    case "truck":
        $truck = $factory->makeTransport("truck");
        var_dump($truck);
        break;
    default:
        var_dump("khong co phuong tien loai {$type}");
}