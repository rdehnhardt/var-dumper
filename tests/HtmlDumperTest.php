<?php

namespace Rdehnhardt\Debug;

use PHPUnit\Framework\TestCase;

class HtmlDumperTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(class_exists(HtmlDumperTest::class));
    }
}