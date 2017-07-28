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
        $nbr = 16;
        $factor = [2,2,2,2];

        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }

    public function test64()
    {
        $nbr = 64;
        $factor = [2,2,2,2,2,2];

        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }

    // public function test9()
    // {
    //     $nbr = 9;
    //     $factor = [3,3];
    //
    //     $this->get('/primeFactors?number='.$nbr)
    //          ->seeJson([
    //              'number' => strval($nbr),
    //              'decomposition' => $factor
    //           ]);
    // }
    //
    // public function test14()
    // {
    //     $nbr = 14;
    //     $factor = [2,7];
    //
    //     $this->get('/primeFactors?number='.$nbr)
    //          ->seeJson([
    //              'number' => strval($nbr),
    //              'decomposition' => $factor
    //           ]);
    // }
    //
    // public function test35()
    // {
    //     $nbr = 35;
    //     $factor = [5,7];
    //
    //     $this->get('/primeFactors?number='.$nbr)
    //          ->seeJson([
    //              'number' => strval($nbr),
    //              'decomposition' => $factor
    //           ]);
    // }
    //
    // public function test49()
    // {
    //     $nbr = 49;
    //     $factor = [7,7];
    //
    //     $this->get('/primeFactors?number='.$nbr)
    //          ->seeJson([
    //              'number' => strval($nbr),
    //              'decomposition' => $factor
    //           ]);
    // }
    //
    // public function test69()
    // {
    //     $nbr = 69;
    //     $factor = [3,23];
    //
    //     $this->get('/primeFactors?number='.$nbr)
    //          ->seeJson([
    //              'number' => strval($nbr),
    //              'decomposition' => $factor
    //           ]);
    // }
    //
    // public function test100()
    // {
    //     $nbr = 100;
    //     $factor = [2,2,5,5];
    //
    //     $this->get('/primeFactors?number='.$nbr)
    //          ->seeJson([
    //              'number' => strval($nbr),
    //              'decomposition' => $factor
    //           ]);
    // }
    //
    // public function test7()
    // {
    //     $inputNumber = 7;
    //
    //     $this->visit('/primeFactors?number='.$inputNumber)
    //           ->seeJson([
    //              'number' => $inputNumber,
    //              'decomposition' => [],
    //           ]);
    // }
    //
    // public function test0()
    // {
    //     $inputNumber = 0;
    //
    //     $this->visit('/primeFactors?number='.$inputNumber)
    //           ->seeJson([
    //              'number' => $inputNumber,
    //              'decomposition' => [],
    //           ]);
    // }
    //
    // public function testIsInt()
    // {
    //     $inputNumber = 'a';
    //
    //     $this->visit('/primeFactors?number='.$inputNumber)
    //           ->seeJson([
    //              'number' => 0,
    //              'decomposition' => [],
    //           ]);
    // }
    //
    // public function test1024()
    // {
    //     $inputNumber = 1024;
    //
    //     $this->visit('/primeFactors?number='.$inputNumber)
    //           ->seeJson([
    //              'number' => $inputNumber,
    //              'decomposition' => [2,2,2,2,2,2,2,2,2,2],
    //           ]);
    // }
}
