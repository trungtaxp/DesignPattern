<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return "Unix: " . join(', ', $line);
    }
}