<?php

namespace Patterns\singleton;

class Singleton
{
    private static $app;

    /**
     * 私有构造函数，防止外界实例化对象
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * 私有克隆方法，防止实例被克隆
     */
    private function __clone()
    {

    }

    public static function getApp()
    {
//        if (isset(self::$app) )
    }

    public function say()
    {
        $arr = [];
        echo array_get($arr, 'k', "Hello Singleton \n");
    }
}