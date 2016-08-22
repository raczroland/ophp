<?php

namespace core\exceptions;

class UninitializedFieldException extends BaseException
{

    const MESSAGE = 'The field \'%s\' is not initialized in the class \'%s\'.';

    public function __construct($className, $fieldName)
    {
        parent::__construct(sprintf(self::MESSAGE, $fieldName, $className));
    }

}