<?php

require(dirname(__FILE__) . "/../../vendor/autoload.php");
include(dirname(__FILE__) . "/../main.php");

use PHPUnit\Framework\TestCase;

class mainTest extends TestCase
{
    public function test_3の自乗が9であること()
    {
        $this->assertSame(9, main\square(3));
    }
}
