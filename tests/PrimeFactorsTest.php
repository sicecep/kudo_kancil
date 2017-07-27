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

    public function test7()
    {
        $inputNumber = 7;

        $this->visit('/primeFactors?number='.$inputNumber)
              ->seeJson([
                 'number' => $inputNumber,
                 'decomposition' => [],
              ]);
    }

    public function test0()
    {
        $inputNumber = 0;

        $this->visit('/primeFactors?number='.$inputNumber)
              ->seeJson([
                 'number' => $inputNumber,
                 'decomposition' => [],
              ]);
    }

    public function testIsInt()
    {
        $inputNumber = 'a';

        $this->visit('/primeFactors?number='.$inputNumber)
              ->seeJson([
                 'number' => 0,
                 'decomposition' => [],
              ]);
    }

    public function test1024()
    {
        $inputNumber = 1024;

        $this->visit('/primeFactors?number='.$inputNumber)
              ->seeJson([
                 'number' => $inputNumber,
                 'decomposition' => [2,2,2,2,2,2,2,2,2,2],
              ]);
    }
}
