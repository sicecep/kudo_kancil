<?php

class PortofolioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPortofolio()
    {
        $this->visit('/')
        ->see('contact-me-link')
        ->click('contact-me-link')
        ->seePageIs('/about-us');
    }

    public function testPingPortofolio()
    {
        $this->visit('/')
        ->see('ping-challenge-link')
        ->click('ping-challenge-link')
        ->seePageIs('/ping');
    }

}
