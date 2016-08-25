<?php

namespace core\lang;


interface IComparable
{

    public function compareTo(Object $o): int;

}