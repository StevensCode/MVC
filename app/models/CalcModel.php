<?php

namespace models;

use controllers\CalcController;

class CalcModel
{
    public $operator1;
    public $operator2;
    public $operand;
    public $answer;

    public function __construct()
    {
        $this->operator1 = $operator1;
        $this->operator1 = $operator2;
        $this->operand = $operand;
    }

    public function Add()
    {
        $this->answer = $this->operator1 + $this->operator2;
    }

    public function Subtract()
    {
        $this->answer = $this->operator1 - $this->operator2;
    }

    public function Divide()
    {
        $this->answer = $this->operator1 / $this->operator2;
    }

    public function Multiply()
    {
        $this->answer = $this->operator1 * $this->operator2;
    }

    public function getAnswer()
    {
        return round($this->answer, 3, PHP_ROUND_HALF_UP);
    }
}
