<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace calculator\models;

use calculator\controllers\CalcController;

class Calc
{
    /**
     * @var float
     */
    public $operand1;

    /**
     * @var float
     */
    public $operand2;

    /**
     * @var char
     */
    public $operator;

    /**
     * @var float
     */
    public $answer;

    /**
     * @param array
     */
    public function __construct()
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
        $this->operator = $operator;
        $this->answer   = $answer;
    }
    
    /**
     * @return float
     */
    public function Add()
    {
        return $this->getAnswer($this->answer = $this->operand1 + $this->operand2);
    }

    /**
     * @return float
     */
    public function Subtract()
    {
        return $this->getAnswer($this->answer = $this->operand1 - $this->operand2);
    }

    /**
     * @return mixed
     */
    public function Divide()
    {
        if($this->operand2 == 0)return $this->answer = "It isn't possible to divide by 0";
        return $this->getAnswer($this->answer = $this->operand1 / $this->operand2);
    }

    /**
     * @return float
     */
    public function Multiply()
    {
        return $this->getAnswer($this->answer = $this->operand1 * $this->operand2);
    }

    /**
     * @param $answer
     * @return mixed
     */
    private function getAnswer($answer)
    {
        $this->answer = round($answer, 3, PHP_ROUND_HALF_UP);
        return $answer;
    }
}
