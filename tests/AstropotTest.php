<?php

class AstropotTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAstropot()
    {
        $this->visit('/astroport')
        ->see('astroport-name');
    }

}
