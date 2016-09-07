<?php
//controller
namespace controllers;

use models\CalcModel;
use views\CalcView;

//does nothing
//TODO make it useful
class CalcController
{
    private $model;
    private $view;

    public function __construct($model)
    {
        $this->model = $model;
        $this->view  = $view;
    }

    public function get()
    {
      
    }
}
