<?php

use PHPUnit\Framework\TestCase;
use Rdehnhardt\Debug\Dumper;

class DumperTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(class_exists(Dumper::class));
    }
}
