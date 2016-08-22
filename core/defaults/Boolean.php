<?php

use core\exceptions\WrongParameterException;

class Boolean extends Object implements Comparable
{

    private $value;

    public function compareTo(Object $obj): Comparable
    {

    }

    public function __construct($value)
    {
        switch (gettype($value)) {
            case 'boolean':
                $this->value = $value;
                break;
            case 'string':
                $this->value = self::toBoolean($value);
                break;
            default:
                throw new WrongParameterException();
        }
    }

    public static function true(): Boolean
    {
        return new self(true);
    }

    public static function false(): Boolean
    {
        return new self(false);
    }

    public static function parseBoolean(string $s): boolean
    {
        return self::toBoolean($s);
    }

    public function booleanValue(): boolean
    {
        return $this->value;
    }

    public static function valueOf($value): Boolean
    {
        return new self($value);
    }

    public function hashCode(): int
    {
        return $this->value ? 1231 : 1237;
    }

    public function equals(Object $obj): boolean
    {
        if ($obj instanceof Boolean) {
            return $this->value == $obj->booleanValue();
        }
        return false;
    }

    private static function toBoolean(string $name): boolean
    {
        return (($name != null) && strtolower($name) == 'true');
    }

    public function __toString(): string
    {
        return $this->value ? 'true' : 'false';
    }

}