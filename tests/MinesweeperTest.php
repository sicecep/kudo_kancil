<?php

class MinesweeperTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMinesweeper()
    {
        $this->visit('/minesweeper')
        ->see('Minesweeper');
    }

}
