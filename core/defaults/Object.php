<?php

class Object
{

    public function getClass(): ReflectionClass
    {
        return new ReflectionClass(get_called_class());
    }

    public function clone(): Object
    {
        return clone $this;
    }

    public function __toString(): string
    {
        return $this->getClass()->getName() . '@';
    }

    public function equals(Object $obj): boolean
    {
        return ($this == $obj);
    }

    public function hashCode(): int
    {
        return 0;
    }

}