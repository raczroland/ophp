<?php

namespace core\defaults;


interface IComparable
{

    public function compareTo(Object $o): int;

}