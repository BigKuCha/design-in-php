<?php

namespace Patterns\facade;


use Patterns\facade\hospitalSystem\Pharmacy;
use Patterns\facade\hospitalSystem\Register;

class HospitalFacade
{
    public static function register()
    {
        $reg = new Register();
        $reg->handle();
    }

    public static function getDrugs()
    {
        $pharmacy = new Pharmacy();
        $pharmacy->getDrugs();
    }
}