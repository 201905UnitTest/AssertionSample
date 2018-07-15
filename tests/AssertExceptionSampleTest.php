<?php

namespace Tests\AssertionSample;

use AssertionSample\Calculator;
use PHPUnit\Framework\TestCase;

class AssertExceptionSampleTest extends TestCase
{
    /** @test */
    public function divide_positive()
    {
        $calculator = new Calculator();
        $actual = $calculator->divide(5, 2);

        $this->assertEquals(2.5, $actual);
    }

    /** @test */
    public function divide_zero()
    {
        $calculator = new Calculator();
        $actual = $calculator->divide(5, 0);

        // how to assert expected exception?
    }
}
