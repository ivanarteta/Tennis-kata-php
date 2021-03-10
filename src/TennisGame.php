<?php


namespace Deg540\PHPTestingBoilerplate;


use phpDocumentor\Reflection\Types\This;
use PhpParser\Node\Scalar\String_;

class TennisGame
{

    private $player1;
    private $player2;
    private $player1Score=0;
    private $player2Score=0;
    private $resultadosEmpate = ["Love All", "Fifteen All", "Thirty All", "Deuce"];
    private $resultados = ["Love", "Fifteen", "Thirty", "Forty","Advantage", "Win"];

    /**
     * TennisGame constructor.
     */
    public function __construct(String $player1Name, String $player2Name)
    {
        $this->player1 = $player1Name;
        $this->player2 = $player2Name;
    }

    public function wonPoint(String $player){
        if($player === $this->player1){
            $this->player1Score++;
        }elseif ($player === $this->player2){
            $this->player2Score++;
        }
    }

    public function empate():String{
        $resultado="";
        if($this->player1Score == 0){
            $resultado = $this->resultadosEmpate[0];
            return $resultado;
        }else if ($this->player1Score == 1){
            $resultado = $this->resultadosEmpate[1];
            return $resultado;
        }else if ($this->player1Score == 2){
            $resultado = $this->resultadosEmpate[2];
            return $resultado;
        }else if($this->player1Score >= 3){
            $resultado = $this->resultadosEmpate[3];
            return $resultado;
        }
    }

    public function result():String{
        if($this->player1Score <= 3 && $this->player2Score < 3){
            return $this->resultados[$this->player1Score] . " - " . $this->resultados[$this->player2Score];
        }else if($this->player1Score < 3 && $this->player2Score <= 3){
            return $this->resultados[$this->player1Score] . " - " . $this->resultados[$this->player2Score];
        }else if ($this->player1Score >= 3 && $this->player2Score >= 3 && $this->player1Score - $this->player2Score == 1){
            return $this->resultados[4] ." " . $this->player1;
        }else if ($this->player1Score >= 3 && $this->player2Score >= 3 && $this->player1Score - $this->player2Score == -1){
            return $this->resultados[4] ." " . $this->player2;
        }else if ($this->player1Score >= 3 && $this->player2Score >= 3 && $this->player1Score - $this->player2Score == 2){
            return $this->resultados[5] ." ". $this->player1;
        }else if ($this->player1Score >= 3 && $this->player2Score >= 3 && $this->player1Score - $this->player2Score == -2){
            return $this->resultados[5] ." " . $this->player2;
        }else if($this->player1Score == 4 && $this->player2Score < 3){
            return $this->resultados[5] ." ". $this->player1;
        }else if($this->player1Score < 3 && $this->player2Score == 4){
            return $this->resultados[5] ." ". $this->player2;
        }
    }

    public function getScore():string{
            /*if ($this->player1Score == 0 && $this->player2Score == 0) {
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
            }else if($this->player1Score >= 3 && $this->player2Score >= 3 && $this->player1Score - $this->player2Score == 0){
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
            }*/

            if($this->player1Score == $this->player2Score){
                return $this->empate();
            }else{
                return $this->result();
            }



    }
}