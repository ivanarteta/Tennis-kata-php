<?php


namespace Deg540\PHPTestingBoilerplate;


use PhpParser\Node\Scalar\String_;

class TennisGame
{

    private $player1;
    private $player2;
    private $player1Score=4;
    private $player2Score=5;
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
            }else if($this->player1Score == 1 && $this->player2Score == 2){
                return "Fifteen - Thirty";
            }else if($this->player1Score == 2 && $this->player2Score == 2){
                return "Thirty all";
            }else if($this->player1Score == 3 && $this->player2Score == 2){
                return "Forty - Thirty";
            }else if($this->player1Score == 3 && $this->player2Score == 3){
                return "Deuce";
            }else if($this->player1Score == 2 && $this->player2Score == 0){
                return "Thirty - Love";
            }else if($this->player1Score == 3 && $this->player2Score == 0){
                return "Forty - Love";
            }else if($this->player1Score == 0 && $this->player2Score == 1){
                return "Love - Fifteen";
            }else if($this->player1Score == 0 && $this->player2Score == 2){
                return "Love - Thirty";
            }else if($this->player1Score == 0 && $this->player2Score == 3){
                return "Love - Forty";
            }else if ($this->player1Score == 4 && $this->player2Score < 3){
                return "Win Player 1";
            }else if ($this->player1Score > 3 && $this->player2Score > 3 && $this->player1Score - $this->player2Score == 2){
                return "Win Player 1";
            }else if ($this->player1Score < 3 && $this->player2Score == 4){
                return "Win Player 2";
            }else if ($this->player1Score > 3 && $this->player2Score > 3 && $this->player1Score - $this->player2Score == -2){
                return "Win Player 2";
            }else if ($this->player1Score > 3 && $this->player2Score > 3 && $this->player1Score - $this->player2Score == 1){
                return "Advantage Player 1";
            }else if ($this->player1Score > 3 && $this->player2Score > 3 && $this->player1Score - $this->player2Score == -1){
                return "Advantage Player 2";
            }



    }
}