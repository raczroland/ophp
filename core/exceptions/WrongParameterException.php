<?php

namespace core\exceptions;

class WrongParameterException extends BaseException
{

    const MESSAGE = 'Wrong parameter(s).';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }

}