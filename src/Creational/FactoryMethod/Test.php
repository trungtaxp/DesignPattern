<?php

require '../../../vendor/autoload.php';
use Phamta\DesignPattern\Creational\FactoryMethod\TransportFactory;
$factory = new TransportFactory();
$ship = $factory->makeTransport("ship");
$truck = $factory->makeTransport("truck");
var_dump($ship, $truck);