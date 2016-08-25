<?php

namespace core\lang;

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

    public function __toString()
    {
        return $this->getClass()->getName() . '@';
    }

    public function equals(Object $obj): bool
    {
        return ($this == $obj);
    }

    public function hashCode(): int
    {
        return 0;
        //TODO
    }

}