<?php

namespace Phamta\DesignPattern\Creational\Builder;

use Phamta\DesignPattern\Creational\Builder\Parts\Door;
use Phamta\DesignPattern\Creational\Builder\Parts\Engine;
use Phamta\DesignPattern\Creational\Builder\Parts\Truck;
use Phamta\DesignPattern\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addDoors()
    {
        $this->truck->setPart('TruckDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('TruckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('TruckWheel', new Wheel());
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}