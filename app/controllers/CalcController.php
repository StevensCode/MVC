<?php

namespace calculator\controllers;

use calculator\models\calc;

class CalcController
{
    private $model;

    public function __construct(Calc $model)
    {
        $this->model = $model;
    }

    public function calculate()
    {
        $this->model->operator1 = $_POST['operator1'];
        $this->model->operator2 = $_POST['operator2'];
        $this->model->operand   = $_POST['operand'];

        switch($this->model->operand)
        {
            case '+':
                $this->model->Add();
                break;
            case '-':
                $this->model->Subtract();
                break;
            case '/':
                if($this->model->operator2 == 0)
                {
                    break;
                }
                $this->model->Divide();
                break;
            case '*':
                $this->model->Multiply();
                break;
        }
    }
}
