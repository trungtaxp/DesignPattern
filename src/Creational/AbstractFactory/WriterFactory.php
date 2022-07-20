<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

interface WriterFactory
{
    public  function createJsonWriter(): JsonWriter;
    public  function createCsvWriter(): CsvWriter;
}