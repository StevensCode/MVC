<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\models;

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
     * @var string
     */
    public $operator;

    /**
     * @param float $operand1
     * @param float $operand2
     * @param string $operator
     * @return float $result
     */
    public function calculate($operand1, $operand2, $operator)
    {
        switch (true) {
            case ($operator == '/' && $operand2 == 0):
                $noZeros = "Sorry, can't divide by '0'";
                return $noZeros;
                break;
        }
        switch ($operator) {
            case '+':
                return $this->getAnswer($operand1 + $operand2);
            case '-':
                return $this->getAnswer($operand1 - $operand2);
            case '/':
                return $this->getAnswer($operand1 / $operand2);
            case '*':
                return $this->getAnswer($operand1 * $operand2);
        }

        return 0;
    }

    /**
     * @param $answer
     * @return float
     */
    private function getAnswer($answer)
    {
        return round($answer, 3, PHP_ROUND_HALF_UP);
    }
}
