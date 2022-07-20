<?php

namespace Phamta\DesignPattern\Creational\AbstractFactory;

use Phamta\DesignPattern\Creational\AbstractFactory\UnixWriterFactory;
use Phamta\DesignPattern\Creational\AbstractFactory\WinWriterFactory;

class WriterAbstractFactory
{
    final public function makeWriter($type)
    {
        switch ($type) {
            case "unix":
                return new UnixWriterFactory();
                break;
            case "win":
                return new WinWriterFactory();
            default:
                var_dump("khong co giao dien loai {$type}");
        }
    }
}