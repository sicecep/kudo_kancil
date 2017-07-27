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
             ->see('contact-me-link');
    }
}
