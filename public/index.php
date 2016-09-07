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
/*
//require model, view, and control files
require '../app/models/CalcModel.php';
require '../app/views/CalcView.php';
require '../app/controllers/CalcController.php';

//namsepaces to use Classes
use models\CalcModel;
use controllers\CalcController;
use views\CalcView;

//new Model
$model = new CalcModel();

//TODO make me useful
//$controller = new CalcController($model);

//new View
$view = new CalcView($controller, $model);

//echo view for form
echo $view->output();
*/
//require model, view, and control files
require '../app/models/CalcModel.php';
require '../app/views/CalcView.php';
require '../app/controllers/CalcController.php';

//namsepaces to use Classes
use models\CalcModel;
use controllers\CalcController;
use views\CalcView;

$model = new CalcModel();

$controller = new CalcController($model);

$view = new CalcView($model);

if (isset($_GET['action'])) $controller->{$_GET['action']}();

echo $view->output();
?>

</body>
</html>
