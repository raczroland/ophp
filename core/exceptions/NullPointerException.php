<?php

namespace core\exceptions;

class NullPointerException extends BaseException
{

    const MESSAGE = 'NullPointerException';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }

}