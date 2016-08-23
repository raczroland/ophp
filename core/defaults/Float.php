<?php

namespace core\defaults;


class CFloat extends Object implements INumber
{

    const INFINITY = INF;
    const NaN = NAN;

    private $value;

    public function intValue(): int
    {
        return (int) $this->value;
    }

    public function floatValue(): float
    {
        return $this->value;
    }

    //TODO
    public static function isNaN(float $v): bool
    {
        return is_nan($v);
    }

}