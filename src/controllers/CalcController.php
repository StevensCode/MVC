<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\controllers;

use QL\CJarvis\MVC\models\Calc;
use QL\CJarvis\MVC\CalcView;

class CalcController
{
    /**
     * @var Calculator
     */
    private $model;

    /**
     * @param Calculator $model
     */
    public function __construct(Calc $model)
    {
        $this->model = $model;
    }

    /**
     * @return calculate
     */
    public function calculate()
    {
        $operand1 = $_POST['operand1'];
        $operand2 = $_POST['operand2'];
        $operator = $_POST['operator'];

        switch($operator)
        {
            case '+':
                $this->model->Add($operand1, $operand2);
                break;
            case '-':
                $this->model->Subtract();
                break;
            case '/':
                $this->model->Divide();
                break;
            case '*':
                $this->model->Multiply();
                break;
        }
    }
}
