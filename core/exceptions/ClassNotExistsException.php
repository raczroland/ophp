<?php

namespace core\exceptions;

class ClassNotExistsException extends BaseException
{

    const MESSAGE = 'The %s class not exists.';

    public function __construct($className)
    {
        parent::__construct(sprintf(self::MESSAGE, $className));
    }

}