<?php

namespace App;

class Calculator
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function calculateDiscount(float $amount, int $percent): float
    {
        return $amount - ($amount * ($percent / 100));
    }
}
