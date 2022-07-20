<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactory
{

    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }

    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }
}