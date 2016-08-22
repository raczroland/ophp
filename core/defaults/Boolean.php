<?php

namespace core\defaults;

use core\exceptions\NullPointerException;
use core\exceptions\WrongParameterException;
use core\interfaces\Comparable;
use core\defaults;


class Boolean extends Object implements Comparable
{

    /**
     * @var boolean
     */
    private $value;

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

    public static function parseBoolean(string $s): bool
    {
        return self::toBoolean($s);
    }

    public function booleanValue(): bool
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

    public function equals(Object $obj): bool
    {
        if ($obj instanceof Boolean) {
            return $this->value == $obj->booleanValue();
        }
        return false;
    }

    private static function toBoolean(string $name): bool
    {
        return (($name != null) && strtolower($name) == 'true');
    }

    public function __toString()
    {
        return $this->value ? 'true' : 'false';
    }

    public function compareTo(Object $obj): Comparable
    {
        if (is_null($obj)) {
            throw new NullPointerException();
        }
        if ($obj instanceof Boolean) {
            return ($obj->value == $this->value ? 0 : ($this->value ? 1 : -1));
        } else {
            throw new WrongParameterException();
        }
    }

}