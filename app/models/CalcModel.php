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
    public $operator1;

    /**
     * @var string
     */
    public $operator2;

    /**
     * @var string
     */
    public $operand;

    /**
     * @var string
     */
    public $answer;

    /**
     * @param array
     */
    public function __construct(array $math = [])
    {
        $this->operator1 = $operator1;
        $this->operator2 = $operator2;
        $this->operand   = $operand;
        $this->answer    = $answer;
    }
    
    /**
     * @return string
     */
    public function Add()
    {
        return $this->getAnswer($this->answer = $this->operator1 + $this->operator2);
    }

    /**
     * @return string
     */
    public function Subtract()
    {
        return $this->getAnswer($this->answer = $this->operator1 - $this->operator2);
    }

    /**
     * @return string
     */
    public function Divide()
    {
        if($this->operator2 == 0)return $this->answer = "It isn't possible to divide by 0";
        return $this->getAnswer($this->answer = $this->operator1 / $this->operator2);
    }

    /**
     * @return string
     */
    public function Multiply()
    {
        return $this->getAnswer($this->answer = $this->operator1 * $this->operator2);
    }

    /**
     * @return string
     */
    private function getAnswer($answer)
    {
        return round($answer, 3, PHP_ROUND_HALF_UP);
    }
}
