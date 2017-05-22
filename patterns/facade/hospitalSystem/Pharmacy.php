<?php

namespace Patterns\facade\hospitalSystem;


/**
 * 药房
 * Class Pharmacy
 * @package Patterns\facade\hospitalSystem
 */
class Pharmacy
{
    public function getDrugs()
    {
        $payment = new Payment();
        $payment->pay();
        echo 'get the medicine' . PHP_EOL;
    }
}