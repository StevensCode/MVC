<?php

namespace controllers;

use models\CalcModel;

class CalcController
{
    private $model;

    public function __construct(CalcModel $model)
    {
        $this->model = $model;
    }

    public function calculate()
    {
        $this->model->operator1 = $_POST['operator1'];
        $this->model->operator2 = $_POST['operator2'];
        $this->model->operand = $_POST['operand'];

        switch($this->model->operand)
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
