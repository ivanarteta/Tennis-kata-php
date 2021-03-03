<?php


namespace Deg540\PHPTestingBoilerplate;


use PhpParser\Node\Scalar\String_;

class TennisGame
{

    private $player1;
    private $player2;
    private $player1Score = 0;
    private $player2Score = 0;

    /**
     * TennisGame constructor.
     */
    public function __construct(String $player1Name, String $player2Name)
    {
        $player1 = $player1Name;
        $player2 = $player2Name;
    }

    public function wonPoint(String $player){

    }

    public function getScore():string{
        if($this->player1Score == 0 && $this->player2Score == 0){
            return "Love all";
        }
    }
}