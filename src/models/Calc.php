<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\models;

use QL\CJarvis\MVC\controllers\Post;

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
     * @param float $operand1
     * @param float $operand2
     * @param string $operator
     */
    public function __construct($operand1, $operand2, $operator)
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
        $this->operator = $operator;
    }

    /**
     * @param null
     * @return string $result
     */
    public function calculate()
    {
        switch ($this->operator) {
            case '+':
                return $this->Add($this->operand1, $this->operand2);
            case '-':
                return $this->Subtract($this->operand1, $this->operand2);
            case '/':
                return $this->Divide($this->operand1, $this->operand2);
            case '*':
                return $this->Multiply($this->operand1, $this->operand2);
        }

        return 0;
    }

    /**
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    private function Add($operand1, $operand2)
    {
        return $this->getAnswer($operand1 + $operand2);
    }

    /**
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    private function Subtract($operand1, $operand2)
    {
        return $this->getAnswer($operand1 - $operand2);
    }

    /**
     * @param float $operand1
     * @param float $operand2
     * @return mixed
     */

    private function Divide($operand1, $operand2)
    {
        if ($operand2 == 0) {
            return "It isn't possible to divide by 0";
        }

        return $this->getAnswer($operand1 / $operand2);
    }

    /**
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    private function Multiply($operand1, $operand2)
    {
        return $this->getAnswer($operand1 * $operand2);
    }

    /**
     * @param $answer
     * @return mixed
     */
    private function getAnswer($answer)
    {
        return round($answer, 3, PHP_ROUND_HALF_UP);
    }
}
