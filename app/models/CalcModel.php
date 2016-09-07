<?php
//model
namespace models;

use controllers\CalcController;

class CalcModel
{
    private $operator1;
    private $operator2;
    private $operand;
    private $answer;

    public function __construct()
    {
        $this->operator1 = $operator1;
        $this->operator2 = $operator2;
        $this->operand   = $operand;
    }

    //
    public function calculate()
    {
        $this->operator1 = $_POST['operator1'];
        $this->operator2 = $_POST['operator2'];
        $this->operand   = $_POST['operand'];
        
        switch($this->operand)
        {
        case '+':
            $this->answer = $this->operator1 + $this->operator2;
            break;
        case '-':
            $this->answer = $this->operator1 - $this->operator2;
            break;
        case '/':
            //error check for 0 divisor
            if($this->operator2 == 0) {$this->answer = "no";break;}
            $this->answer = $this->operator1 / $this->operator2;
            break;
        case '*':
            $this->answer = $this->operator1 * $this->operator2;
            break;
        }
    }

    public function getAnswer()
    {
        //gives error message if operator2 == 0, allows - number input
        if($this->answer !== "no")
        return round($this->answer, 3, PHP_ROUND_HALF_UP);
        else
        return $this->answer = "Sorry, 0 isn't divisible by 0";
    }
}
