<?php

namespace DesignPattern\Creational\Builder;

interface Builder
{
    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle();

    public function createVehicle();
}