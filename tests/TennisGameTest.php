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

    /**
     * @test
     **/
    public function player2_gana_el_primer_punto_con_player_1_con_1_punto()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Fifteen all",$output);
    }

    /**
     * @test
     **/
    public function player2_gana_el_segundo_punto_con_player_1_con_1_punto()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Fifteen - Thirty",$output);
    }

    /**
     * @test
     **/
    public function player1_gana_el_segundo_punto_con_player_2_con_2_punto()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Thirty all",$output);
    }

    /**
     * @test
     **/
    public function player1_gana_el_tercer_punto_con_player_2_con_2_punto()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Forty - Thirty",$output);
    }

    /**
     * @test
     **/
    public function player2_gana_el_tercer_punto_con_player_1_con_3_punto()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Deuce",$output);
    }

    /**
     * @test
     **/
    public function player1_gana_el_segundo_punto_con_player_1_con_0_puntos()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Thirty - Love",$output);
    }

    /**
     * @test
     **/
    public function player1_gana_el_tercer_punto_con_player_1_con_0_puntos()
    {
        $tennis = new TennisGame("Ivan", "Maider");
        $output = $tennis->getScore();
        $this->assertEquals("Forty - Love",$output);
    }


}
