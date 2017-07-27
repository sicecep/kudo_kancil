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
            ->see('<a id="repository-link" href="https://github.com/sicecep/kudo_kancil#readme">repository-link</a>');
    }

  }
