<?php

/**
 * Created by PhpStorm.
 * User: Roland
 * Date: 2016.07.29.
 * Time: 10:43
 */
class OString
{

    private $value;

    public function __constructor($value)
    {
        $this->value = (string) $value;
    }

    public function toUpperCase()
    {
        return new OString(mb_strtoupper($this->value));
    }

    public function toLowerCase()
    {
        return new OString(mb_strtolower($this->value));
    }

}