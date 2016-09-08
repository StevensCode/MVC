<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace controllers;

use models\CalcModel;

class CalcController
{
    /**
     * @var Calculator
     */
    private $model;

    /**
     * @param Calculator $model
     */
    public function __construct(CalcModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return calculate
     */
    public function calculate()
    {
        $this->model->operand1 = $_POST['operand1'];
        $this->model->operand2 = $_POST['operand2'];
        $this->model->operator   = $_POST['operator'];

        switch($this->model->operator)
        {
            case '+':
                $this->model->Add();
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
