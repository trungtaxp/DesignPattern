<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}