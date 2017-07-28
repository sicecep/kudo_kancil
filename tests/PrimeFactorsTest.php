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

    public function testString()
    {
          $nbr = "hello";
          $error = "not a number";

          $this->get('/primeFactors?number='.$nbr)
               ->seeJson([
                   'number' => $nbr,
                   'error' => $error
                ]);
    }

    public function test9()
    {
        $nbr = 9;
        $factor = [3,3];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }
    
    public function test14()
    {
        $nbr = 14;
        $factor = [2,7];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }
    
    public function test35()
    {
        $nbr = 35;
        $factor = [5,7];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }
    
    public function test49()
    {
        $nbr = 49;
        $factor = [7,7];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }
    
    public function test69()
    {
        $nbr = 69;
        $factor = [3,23];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }
    
    public function test100()
    {
        $nbr = 100;
        $factor = [2,2,5,5];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }

    public function test1000000()
    {
        $nbr = 1000000;
        $factor = [2,2,2,2,2,2,5,5,5,5,5,5];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }

    public function test999()
    {
        $nbr = 999;
        $factor = [3,3,3,37];
    
        $this->get('/primeFactors?number='.$nbr)
             ->seeJson([
                 'number' => $nbr,
                 'decomposition' => $factor
              ]);
    }
}
