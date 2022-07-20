<?php

namespace Phamta\DesignPattern\Creational\FactoryMethod;

class Truck implements Transport
{

    public function deliver(): string
    {
        return "duong bo";
    }
}