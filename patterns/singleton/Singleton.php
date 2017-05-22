<?php

namespace Patterns\singleton;

/**
 * Class Singleton
 * @function say
 * @package  Patterns\singleton
 */
class Singleton
{
    /**
     * @var \Patterns\singleton\Singleton
     */
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

    /**
     * @return Singleton
     */
    public static function getApp()
    {
        if (!isset(static::$app)) {
            static::$app = new static();
        }
        return static::$app;
    }

    /**
     * Test func
     */
    public function say()
    {
        $arr = [];
        echo array_get($arr, 'k', "Hello Singleton" . PHP_EOL);
    }
}