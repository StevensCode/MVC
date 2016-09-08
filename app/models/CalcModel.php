<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace models;

use controllers\CalcController;

class CalcModel
{
    /**
     * @var string
     */
    public $operand1;

    /**
     * @var string
     */
    public $operand2;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $answer;

    /**
     * @param array
     */
    public function __construct(array $math = [])
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
        $this->operator   = $operator;
        $this->answer    = $answer;
    }
    
    /**
     * @return string
     */
    public function Add()
    {
        return $this->getAnswer($this->answer = $this->operand1 + $this->operand2);
    }

    /**
     * @return string
     */
    public function Subtract()
    {
        return $this->getAnswer($this->answer = $this->operand1 - $this->operand2);
    }

    /**
     * @return string
     */
    public function Divide()
    {
        if($this->operand2 == 0)return $this->answer = "It isn't possible to divide by 0";
        return $this->getAnswer($this->answer = $this->operand1 / $this->operand2);
    }

    /**
     * @return string
     */
    public function Multiply()
    {
        return $this->getAnswer($this->answer = $this->operand1 * $this->operand2);
    }

    /**
     * @return string
     */
    private function getAnswer($answer)
    {
        return round($answer, 3, PHP_ROUND_HALF_UP);
    }
}
