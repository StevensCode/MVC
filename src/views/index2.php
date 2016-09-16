<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
require '../src/models/calc.php';
require '../src/views/CalcView.php';
require '../src/controllers/CalcController.php';

use calculator\models\Calc;
use calculator\controllers\CalcController;
use calculator\views\CalcView;

$model = new Calc();

$controller = new CalcController($model);

$view = new CalcView($model);

if (isset($_GET['action'])) 
    {
        $controller->{$_GET['action']}();
    }

echo $view->output();
