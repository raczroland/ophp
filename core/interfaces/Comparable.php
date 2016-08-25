<?php

namespace core\interfaces;

use core\lang\Object;

interface Comparable
{

    public function compareTo(Object $obj): Comparable;

}