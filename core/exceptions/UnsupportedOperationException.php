<?php

namespace core\exceptions;


class UnsupportedOperationException extends BaseException
{

    const MESSAGE = 'UnsupportedOperationException';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }

}