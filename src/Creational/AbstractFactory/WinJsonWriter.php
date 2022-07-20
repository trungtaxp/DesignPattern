<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

class WinJsonWriter implements JsonWriter
{

    public function write(array $data, bool $formatted): string
    {
        $options = false;
        if($formatted) {
            $options = true;
        }
        return "Win: " . json_encode($data, $options);
    }
}