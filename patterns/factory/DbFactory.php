<?php

namespace Patterns\factory;

/**
 * 工厂模式的好处：
 *   减少耦合关系：如果想要修改、或者重命名已经存在的类，
 *   只需要修改工厂类就可以了，不需要查找调用的地方
 * Class DbFactory
 * @package Patterns\factory
 */
class DbFactory
{
    /**
     * @param $db
     * @return DbFactoryInterface
     * @throws \Exception
     */
    public static function getDb($db)
    {
        $class = __NAMESPACE__ . '\\' . ucwords($db);
        if (class_exists($class)) {
            return new $class;
        }
        throw new \Exception('the db name only can be mysql or orical');
    }
}