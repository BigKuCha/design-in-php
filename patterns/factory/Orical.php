<?php

namespace Patterns\factory;


class Orical implements DbFactoryInterface
{
    public function __construct()
    {
        echo "connected to Orical " . PHP_EOL;
    }

    public function query($sql)
    {
        echo "executed sql:" . $sql . PHP_EOL;
    }
}