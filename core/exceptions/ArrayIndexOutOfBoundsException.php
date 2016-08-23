<?php

namespace core\exceptions;


class ArrayIndexOutOfBoundsException extends IndexOutOfBoundsException
{

    public function __construct(int $index)
    {
        parent::__construct("Array index out of range: " . $index);
    }

}