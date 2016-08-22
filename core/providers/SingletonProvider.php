<?php

namespace core\providers;

use core\exceptions\ClassNotExistsException;
use core\exceptions\UninitializedFieldException;
use ReflectionClass;

class SingletonProvider implements \Singleton
{

    private static $instance;

    private static $className;

    private function __construct() {}

    public static function initClass($className)
    {
        if (class_exists($className)) {
            self::$className = $className;
        } else {
            throw new ClassNotExistsException($className);
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$className)) {
            throw new UninitializedFieldException(get_called_class(), 'className');
        } else if (is_null(self::$instance)) {
            $class = new ReflectionClass(self::$className);
            $args = func_get_args();
            self::$instance = $class->newInstance($args);
        }
        return self::$instance;
    }
}