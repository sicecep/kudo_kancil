<?php

class HomeTest extends TestCase
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

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShare()
    {
        $this->visit('/')
             ->see('repository-link')
             ->click('repository-link')
             ->seePageIs('/readme')
             ->see('YoseTheGame');
    }
}
