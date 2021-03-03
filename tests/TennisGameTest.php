<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class TennisGameTest extends TestCase
{
    /**
     * @test
     **/
    public function test_del_Estado_inicial()
    {

        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Love all",$output);
    }

    /**
     * @test
     **/
    public function player1_gana_el_primer_punto()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Fifteen - Love",$output);
    }


}
