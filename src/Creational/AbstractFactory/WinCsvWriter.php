<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return "Win: " . join(', ', $line);
    }
}