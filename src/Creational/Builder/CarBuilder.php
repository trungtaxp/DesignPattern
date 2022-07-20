<?php

namespace Phamta\DesignPattern\Creational\Builder;

use Phamta\DesignPattern\Creational\Builder\Parts\Car;
use Phamta\DesignPattern\Creational\Builder\Parts\Door;
use Phamta\DesignPattern\Creational\Builder\Parts\Engine;
use Phamta\DesignPattern\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addDoors()
    {
        $this->car->setPart('CarDoor', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('CarEngine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('CarWheel', new Wheel());
    }

    public function getVehicle()
    {
        return $this->car;
    }
}