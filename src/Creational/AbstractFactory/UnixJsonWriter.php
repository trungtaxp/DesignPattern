<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

class UnixJsonWriter implements JsonWriter
{

    public function write(array $data, bool $formatted): string
    {
        $options = false;
        if($formatted) {
            $options = true;
        }
        return "Unix: " . json_encode($data, $options);
    }
}