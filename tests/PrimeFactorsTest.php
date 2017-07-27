<?php

class PrimeFactorsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test16()
    {
        $inputNumber = 16;

        $this->visit('/primeFactors?number='.$inputNumber)
              ->seeJson([
                 'number' => $inputNumber,
                 'decomposition' => [2,2,2,2],
              ]);
    }
}
