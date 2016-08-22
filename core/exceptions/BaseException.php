<?php

namespace core\exceptions;

class BaseException extends \Exception
{

    public function __construct($message)
    {
        parent::__construct($message, 0, null);
    }

}