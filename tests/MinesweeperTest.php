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

    public function testColumn11()
    {
        $this->visit('/minesweeper')
        ->see('Minesweeper')
        ->see('cell-1x1');

    }

    public function testColumn()
    {
        $this->visit('/minesweeper')
        ->see('Minesweeper');
        for($i=1;$i<=8;$i++)
        {
          for($j=1;$j<=8;$j++)
          {
            $this->see('cell-'.$i.'x'.$j);
          }
        }

    }

}
