<?php

namespace Patterns\factory;


class Orical implements DbFactoryInterface
{
    public function __construct()
    {
        echo "connected to Orical \n";
    }

    public function query($sql)
    {
        echo "executed sql:" . $sql . "\n";
    }
}