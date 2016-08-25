<?php

namespace core\lang;


use core\exceptions\BaseException;

trait TGeneric
{

    private function _checkGenericType($value, $constantName = "GENERIC_TYPE")
    {
        if (!defined("self::" . $constantName)) {
            throw new BaseException("GENERIC_TYPE is not defined.");
        }
        $className = self::$constantName;
        if (class_exists($className)) {
            if (is_a($value, $className)) {
                return;
            }
        } else {
            if (gettype($value) == self::$constantName) {
                return;
            }
        }
        throw new GenericTypeNotMatchException("Generic type not match: " . self::$constantName . ".");
    }

    private function checkType($value)
    {
        $this->_checkGenericType($value);
    }

    private function checkType1($value)
    {
        $this->_checkGenericType($value, "GENERIC_TYPE_1");
    }

    private function checkType2($value)
    {
        $this->_checkGenericType($value, "GENERIC_TYPE_2");
    }

}