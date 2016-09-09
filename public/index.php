<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Simple Calculator - MVC</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link href='css/style.css' rel='stylesheet' type='text/css'>
    </head>
<body>
<h1>MVC - Calculator</h1>
<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
require '../app/models/calc.php';
require '../app/views/CalcView.php';
require '../app/controllers/CalcController.php';

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
?>

</body>
</html>
