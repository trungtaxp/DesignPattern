<?php

namespace Phamta\DesignPattern\Creational\FactoryMethod;

class TransportFactory
{
    public function makeTransport($type) {
        switch ($type) {
            case "ship":
                $ship =  new Ship();
                return $ship->deliver();
            case "truck":
                $truck = new Truck();
                return $truck->deliver();
            default:
                return "khong con loai van chuyen nao";
        }
    }
}
