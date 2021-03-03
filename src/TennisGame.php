<?php


namespace Deg540\PHPTestingBoilerplate;


use PhpParser\Node\Scalar\String_;

class TennisGame
{

    private $player1;
    private $player2;
    private $player1Score;
    private $player2Score;
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

        $this->player1Score=0;
        $this->player2Score=0;

        while($this->player1Win == false && $this->player2Win == false) {

            $score = rand(1, 2);
            if ($score == 1) {
                $this->wonPoint("$this->player1");
            } else {
                $this->wonPoint("$this->player2");
            }
            if ($this->player1Score == 0 && $this->player2Score == 0) {
                return "Love all";
            }else if($this->player1Score == 1 && $this->player2Score == 0){
                return "Fifteen - Love";
            }


        }
    }
}