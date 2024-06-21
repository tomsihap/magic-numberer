<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tomsihap\MagicNumberer\MagicIntegers;

class MagicIntegersTest extends TestCase
{
    public function testMagicIntegersReturnsValidIntegers()
    {
        $this->assertEquals(1, MagicIntegers::ONE->value);
        $this->assertEquals(2, MagicIntegers::TWO->value);
        $this->assertEquals(3, MagicIntegers::THREE->value);
        $this->assertEquals(4, MagicIntegers::FOUR->value);
        $this->assertEquals(5, MagicIntegers::FIVE->value);
        $this->assertEquals(6, MagicIntegers::SIX->value);
        $this->assertEquals(7, MagicIntegers::SEVEN->value);
        $this->assertEquals(8, MagicIntegers::EIGHT->value);
        $this->assertEquals(9, MagicIntegers::NINE->value);
        $this->assertEquals(10, MagicIntegers::TEN->value);
        $this->assertEquals(11, MagicIntegers::ELEVEN->value);
        $this->assertEquals(12, MagicIntegers::TWELVE->value);
    }

    public function testMagicIntegersDoNotHaveInvalidIntegers()
    {
        $this->assertNotEquals(13, MagicIntegers::TWELVE->value);
    }
}