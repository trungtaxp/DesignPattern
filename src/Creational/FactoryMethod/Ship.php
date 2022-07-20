<?php

namespace Phamta\DesignPattern\Creational\FactoryMethod;

class Ship implements Transport
{

    public function deliver(): string
    {
        return "duong bien";
    }
}