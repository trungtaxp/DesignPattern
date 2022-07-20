<?php

namespace Phamta\DesignPattern\Creational\Builder\Parts;

abstract class Vehicle
{
    final public function setPart(string $key, object $value)
    {
        var_dump( $key );
    }
}