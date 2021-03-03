<?php


namespace Deg540\PHPTestingBoilerplate;


use PhpParser\Node\Scalar\String_;

class TennisGame
{

    private $player1;
    private $player2;
    private $player1Score=1;
    private $player2Score=1;
    private $player1Win = false;
    private $player2Win = false;

    /**
     * TennisGame constructor.
     */
    public function __construct(String $player1Name, String $player2Name)
    {
        $player1 = $player1Name;
        $player2 = $player2Name;
    }

    public function wonPoint(String $player){
        if($player == $this->player1){
            $this->player1Score++;
        }else if ($player == $this->player2){
            $this->player2Score++;
        }
    }

    public function getScore():string{
            if ($this->player1Score == 0 && $this->player2Score == 0) {
                return "Love all";
            }else if($this->player1Score == 1 && $this->player2Score == 0){
                return "Fifteen - Love";
            }else if($this->player1Score == 1 && $this->player2Score == 1){
                return "Fifteen all";
            }



    }
}