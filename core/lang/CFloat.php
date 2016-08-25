<?php

namespace core\lang;


class CFloat extends Object implements INumber
{

    const INFINITY = INF;
    const NaN = NAN;

    private $value;

    public function __construct($value)
    {
        switch (gettype($value)) {
            case 'float':
                $this->value = $value;
                break;
            case 'integer':
                $this->value = (float) $value;
                break;
            case 'string':
                $this->value = floatval($value);
                break;
            default:
                throw new WrongParameterException();
        }
    }

    public function intValue(): int
    {
        return (int) $this->value;
    }

    public function floatValue(): float
    {
        return $this->value;
    }

    public function isNaN(): bool
    {
        return self::isThisNaN($this->value);
    }

    public static function isThisNaN(float $v): bool
    {
        return is_nan($v);
    }

    public function isFinite(): bool
    {
        return self::isThisFinite($this->value);
    }

    public static function isThisFinite(float $v): bool
    {
        return is_finite($v);
    }

}