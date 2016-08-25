<?php

namespace core\lang;


class Integer extends Object implements INumber
{

    const MAX_VALUE = PHP_INT_MAX;
    const MIN_VALUE = PHP_INT_MIN;
    const SIZE = PHP_INT_SIZE;

    private $value;

    public function __constructor($value)
    {
        $this->value = (int) $value;
    }

    public static function toString($i, $radix = DEFAULT_RADIX)
    {
        if ($radix < MIN_RADIX || $radix > MAX_RADIX) {
            $radix = DEFAULT_RADIX;
        }
        $sign = ($i < 0) ? '-' : '';
        /*return new OString(
            $sign . base_convert($i, DEFAULT_RADIX, $radix)
        );*/
        return $sign . base_convert($i, DEFAULT_RADIX, $radix);
    }

    public static function toHexString($i)
    {
        return self::toString($i, 16);
    }

    public static function toOctalString($i)
    {
        return self::toString($i, 8);
    }

    public static function toBinaryString($i)
    {
        return self::toString($i, 2);
    }

    public function intValue(): int
    {
        return $this->value;
    }

    public function floatValue(): float
    {
        return (float) $this->value;
    }

    public function __toString()
    {
        return self::toString($this->value);
    }

    public static function getHashCode(int $value): int
    {
        return $value;
    }

    public function hashCode(): int
    {
        return self::getHashCode($this->value);
    }

    public function equals(Object $obj): bool
    {
        if ($obj instanceof Integer) {
            return $this->value == $obj->intValue();
        }
        return false;
    }

    public static function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function min(int $a, int $b): int
    {
        return Math::min($a, $b);
    }

    public static function max(int $a, int $b): int
    {
        return Math::max($a, $b);
    }

}