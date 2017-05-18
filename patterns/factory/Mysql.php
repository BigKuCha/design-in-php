<?php

namespace Patterns\factory;


class Mysql implements DbFactoryInterface
{
    public function __construct()
    {
        echo "connected to Mysql \n";
    }


    /**
     * @param $sql
     */
    public function query($sql)
    {
        echo "execute sql:" . $sql . "\n";
    }
}