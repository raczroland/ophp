<?php

namespace core\exceptions;

class IndexOutOfBoundsException extends BaseException
{

    const MESSAGE = 'Index out of bounds, %s.';

    public function __construct($msg)
    {
        parent::__construct(sprintf(self::MESSAGE, $msg));
    }

}