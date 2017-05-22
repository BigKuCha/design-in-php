<?php

namespace Patterns\facade\hospitalSystem;


/**
 * 挂号窗口
 * Class Register
 * @package Patterns\facade\hospitalSystem
 */
class Register
{
    public function handle()
    {
        $this->fillinForm();
        $payment = new Payment();
        $payment->pay('register');
        echo 'register for patient ' . PHP_EOL;
    }

    public function fillinForm()
    {
        echo 'fillin infomation' . PHP_EOL;
    }
}