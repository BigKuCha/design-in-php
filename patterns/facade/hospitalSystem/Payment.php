<?php

namespace Patterns\facade\hospitalSystem;


/**
 * 划价 缴费
 * Class Payment
 * @package Patterns\facade\hospitalSystem
 */
class Payment
{
    public function pay($type = 'drugs')
    {
        echo 'pay for the ' . $type . PHP_EOL;
    }
}