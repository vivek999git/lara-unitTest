<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_add_numbers()
    {
        $calculator = new Calculator();

        $result = $calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }

    public function test_calculate_discount_correctly()
    {
        $service = new Calculator();

        $this->assertEquals(90, $service->calculateDiscount(100, 10));
        $this->assertEquals(80, $service->calculateDiscount(100, 20));
    }
}
