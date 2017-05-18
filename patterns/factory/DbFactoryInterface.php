<?php

namespace Patterns\factory;

/**
 * Interface DbFactoryInterface
 * @package Patterns\factory
 */
interface DbFactoryInterface
{
    /**
     * @param $sql
     * @return mixed
     */
    public function query($sql);
}