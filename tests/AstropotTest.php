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

    public function testGate(){
        $this->visit('/astroport')
        ->see('gate-1')
        ->see('gate-2')
        ->see('gate-3')
        ->see('first gate')
        ->see('second gate')
        ->see('third gate');
    }

    public function testShip(){
        $this->visit('/astroport')
        ->see('gate-1')
        ->see('gate-2')
        ->see('gate-3');
    }

    public function testDocker()
    {
        $shipName = 'Millenium Falcon';

         $this->visit('/astroport');
    }

}
