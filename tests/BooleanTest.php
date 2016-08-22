<?php

namespace tests;

require_once dirname(__FILE__) . '/../otphp.php';

use core\defaults\Boolean;

class BooleanTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructor()
    {
        $a = new Boolean(true);
        $this->assertTrue($a->booleanValue());

        $a = new Boolean(false);
        $this->assertFalse($a->booleanValue());
    }

}