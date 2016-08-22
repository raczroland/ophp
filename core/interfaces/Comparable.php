<?php

namespace core\interfaces;

use core\defaults\Object;

interface Comparable
{

    public function compareTo(Object $obj): Comparable;

}