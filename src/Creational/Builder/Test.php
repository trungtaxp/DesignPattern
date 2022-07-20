<?php

require '../../../vendor/autoload.php';

use Phamta\DesignPattern\Creational\Builder\Director;
use Phamta\DesignPattern\Creational\Builder\CarBuilder;
use Phamta\DesignPattern\Creational\Builder\TruckBuilder;

$type = $argv[1];
switch ($type) {
    case "truck":
        $truckBuilder = new TruckBuilder();
        $newTruckVehicle = (new Director())->build($truckBuilder);
        var_dump($newTruckVehicle->getName());
        break;

    case "car":
        $carBuilder = new CarBuilder();
        $newCarVehicle = (new Director())->build($carBuilder);
        var_dump( $newCarVehicle->getName());
        break;
    default:
        var_dump("khong co oto loai {$type}");
}