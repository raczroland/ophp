<?php

class Integer
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
        return new OString(
            $sign . base_convert($i, DEFAULT_RADIX, $radix)
        );
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


}