<?php

class PrimeFactorsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->visit('/')
             ->see('Hello Yose');
    }
}
