<?php

namespace tests;

require_once dirname(__FILE__) . '/../otphp.php';

use core\defaults\Boolean;
use core\exceptions;

class BooleanTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructor()
    {
        $a = new Boolean(true);
        $this->assertTrue($a->booleanValue());

        $a = new Boolean(false);
        $this->assertFalse($a->booleanValue());

        $a = new Boolean("true");
        $this->assertTrue($a->booleanValue());

        $a = new Boolean("false");
        $this->assertFalse($a->booleanValue());

        $a = new Boolean("test");
        $this->assertFalse($a->booleanValue());

        $this->expectException('core\exceptions\WrongParameterException');
        new Boolean(25.1);
    }

    public function testMethods()
    {
        $a = Boolean::true();
        $this->assertTrue($a->booleanValue());

        $a = Boolean::false();
        $this->assertFalse($a->booleanValue());

        $bl = Boolean::parseBoolean("true");
        $this->assertTrue($bl);

        $bl = Boolean::parseBoolean("false");
        $this->assertFalse($bl);
    }

}